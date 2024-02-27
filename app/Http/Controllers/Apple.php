<?php

namespace App\Http\Controllers;

use App\Models\Apple as ModelsApple;
use Illuminate\Http\Request;

class Apple extends Controller
{
    public function index() {
        return view("index", ["apples" => ModelsApple::all()]);
    }
}
