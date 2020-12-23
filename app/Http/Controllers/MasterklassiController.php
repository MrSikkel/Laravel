<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MasterklassiController extends Controller
{
    public function masterklassi()
    {
        return view('masterklassi');
    }
}
