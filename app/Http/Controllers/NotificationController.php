<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function get()
    {
        $notifications = Notification::take(5)
                            ->orderBy('created_at','desc')
                            ->orderBy('id','desc')
                            ->get();

        return response()->json($notifications);
    }

    public function store(Request $request)
    {
        $notification = new Notification();
        $notification->fill($request->all());
        $notification->save();
        
    }
}
