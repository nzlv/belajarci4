<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // return view('keren');
        // echo "Hello world!";
    }
    public function kerenbanget()
    {
        echo "Keren bet goks";
    }
}
