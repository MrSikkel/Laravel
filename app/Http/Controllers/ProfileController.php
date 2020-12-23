<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user())
        {
            $model = DB::table('profiles')->where('id_user', Auth::id())->first();
            $model2 = DB::table('users')->where('id_user', Auth::id())->first();
             return view('account/account', ['model' => $model, 'model2' => $model2]);
        }
    }
}
