<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerepodgotovkaController extends Controller
{
    public function perepodgotovka()
    {
        return view('perepodgotovka');
    }
}
