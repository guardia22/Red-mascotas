<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Notifications;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotifications(){
        return auth()->user()->notifications;
    }

    public function markReadNotifications(){
        $user = auth()->user();
        $user->unreadNotifications->marAsRead();

        return $user->notifications;

    }

    public function SendNotification($user_id){

        $user = User::find($user_id);
        $user->notify(new Notifications(auth()->user()));
    }
}
