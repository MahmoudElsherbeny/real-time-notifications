<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NotificationsController extends Controller
{
    //get user notifications
    public function notifications() {
        return [
            'notifications_data' => Auth::user()->notifications,
            'unread_notifications' => Auth::user()->unreadnotifications,
        ];
    }

    //mark notification as read on click and go tp link
    public function markRead(Request $request) {
        $notification = Auth::user()->notifications->where('id', $request->id)->first();
        if($notification) {
            $notification->markAsRead();
            return Redirect::to($notification->data['link']);
        }
        else {
            return Redirect::back();
        }
    }
}
