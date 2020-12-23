<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrepodiController extends Controller
{
    public function prepodi()
    {
        return view('prepodi');
    }
}
