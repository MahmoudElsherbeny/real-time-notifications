<!--  BEGIN NAVBAR  -->
<div class="header-container container-xxl">
    <header class="header navbar navbar-expand-sm expand-header" style="direction: ltr">

        <ul class="navbar-item flex-row ms-lg-auto ms-0">
            <li id="notificationsApp" class="nav-item dropdown notification-dropdown">

                <!-- vue js component -->
                <notifications></notifications>

            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar-container">
                        {{ Auth::user()->name }}
                    </div>
                </a>

                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="dropdown-item">
                        {!! Form::open(['url' => route('logout')]) !!}
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span>تسجيل الخروج</span>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>

            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->
