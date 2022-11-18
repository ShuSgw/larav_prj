<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $vals = Test::all();
        return view('test.test', compact("vals"));
    }
}