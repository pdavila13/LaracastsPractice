<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller {

    public function index()
    {
        return "Hello, world!";
        //return view('welcome');
    }

    //Function return contact
    public function contact()
    {
        return "Contact me";
    }
}
