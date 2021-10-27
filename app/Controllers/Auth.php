<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('landingpage.php');
    }

    public function login()
    {
        return view('Auth/login.php');
    }
}
