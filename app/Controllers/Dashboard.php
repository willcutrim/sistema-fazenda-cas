<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
    public function teste(){
       return view('templates/opa');
    }
    public function admin(){
        return view('welcome_message');
    }
}
