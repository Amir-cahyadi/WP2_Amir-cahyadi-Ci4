<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        // ketika di panggil root php menjalankan sebuah view  welcome_message.php(di dalam folder view)
        return view('welcome_message');
        // test pemanggilan hello word di bawah ini
        // echo "Hello world";
    }
}
