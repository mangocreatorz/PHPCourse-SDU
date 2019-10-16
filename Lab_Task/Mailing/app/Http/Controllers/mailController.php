<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send() {
        Mail::send(['text' => 'mail'], ['name', 'Sergey Kirichenko'], function ($message) {
            $message->to('170103078@stu.sdu.edu.kz', 'To  me')->subject('Test mail');
            $message->from('170103078@stu.sdu.edu.kz', 'From me');
        });
    }
    
}
