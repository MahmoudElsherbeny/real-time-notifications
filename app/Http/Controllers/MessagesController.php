<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Events\RealtimeNotificationEvent;
use App\Http\Requests\MessageRequest;
use App\Notifications\MessageNotification;
use App\Models\Message;
use App\Models\User;

class MessagesController extends Controller
{
    // show product list
    public function show($id) {
        $message = Message::findOrFail($id);
        return view('message')->with(['message' => $message]);
    }

    // show create new product form
    public function store(MessageRequest $request) {
        $message = Message::create([
            'name' => $request->name,
            'discreption' => $request->discreption
        ]);

        Notification::send(User::all(), new MessageNotification($message));
        RealtimeNotificationEvent::dispatch($message);

        Session::flash('success', 'تم الحفظ بنجاح');
        return Redirect::back();
    }
}
