<template>

    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
        <span class="badge badge-danger" v-if="unreadCount > 0 && unreadCount <= 99">{{ unreadCount }}</span>
        <span class="badge badge-danger text-left" v-else-if="unreadCount > 99">+99</span>
    </a>

    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
        <div class="notification-scroll">

            <div v-show="notificationsCount > 0">
                <div v-for="notification in notifications" :key="notification.id">
                    <a v-bind:href="'/notifications/mark-read/'+notification.id" class="dropdown-item" v-bind:class="notification.read_at == null ? ' unread' : ' read'">
                        <div class="media-body">
                            <div class="data-info">
                                <div class="title">
                                    <h6 class="mb-1">{{ notification.data.title }}</h6>
                                </div>
                                <div class="discreption">{{ notification.data.discreption }}</div>
                                <p class="">{{ dayjs(notification.created_at).locale('ar').fromNow() }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div v-show="notificationsCount <= 0" class="text-center pt-4 pb-4">
                لا يوجد اشعارات الآن
            </div>

        </div>
    </div>

</template>

<script>
    import dayjs from 'dayjs';
    import relativeTime from 'dayjs/plugin/relativeTime';

    dayjs.extend(relativeTime);

    export default {
        data: function () {
            return {
                dayjs,
                notifications: {},
                notificationsCount: 0,
                unreadCount: 0,
            }
        },
        created: function () {
            this.getNotifications();

            Echo.channel('notifications')
                .listen('RealtimeNotificationEvent', (notification) => {
                    console.log(notification);
                    //this.notifications.unshift(notification);
                    this.getNotifications();
                    this.unreadCount++;
                });
        },
        methods: {
            getNotifications() {
                axios.get('/notifications').then(response => {
                    this.notifications = response.data.notifications_data;
                    this.notificationsCount = response.data.notifications_data.length;
                    this.unreadCount = response.data.unread_notifications.length;
                }).catch(error => console.log(error));
            },
            /*
            readNotification(notification_id) {
                axios.get('/notifications/mark-read/'+notification_id);
            },*/
        }
    }
</script>
