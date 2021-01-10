<?php

namespace App\Http\Controllers;

use App\Util\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return redirect('/')->with('notification', new Notification('Notification is work!', 'success'));
    }
}
