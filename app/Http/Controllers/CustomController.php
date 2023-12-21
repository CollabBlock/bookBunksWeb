<?php
// YourController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomController extends Controller
{
    public function displayTable()
    {
        $data = DB::select('SELECT * FROM your_table');
        return view('welcome', compact('data'));
    }
}
