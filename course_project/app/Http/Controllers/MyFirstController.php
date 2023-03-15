<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    function index(){
        return '<h1>This is the main page of our web-application.</h1>';
    }

    function about(){
        return '<h1>About-us-page</h1> <h2>You are welcomed!</h2>';
    }

    function welcoming(){
        return '<h1>Hello Laravel, and Welcome to Laravel!</h1>';
    }
}
