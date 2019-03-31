<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Auth;

class UserController extends Controller
{
    public function getUserData(Request $request) {

      $userData = DB::table('users')->where('id', Auth::user()->user_ID)->get();

      dd($userData);
    }
}
