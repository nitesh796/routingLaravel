<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function ping(){
        return "<h1>Pong</h1>";
    }
}
