<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Auth;
use DateTime;
use Mail;
use App\Campaign;

class UserController extends Controller
{
    public function index() {

      $user = Auth::user()->id;

      $userData = DB::table('users')
                      ->where('id', '=', $user)
                      ->get();

      $campaignData = DB::table('approvedcampaigns')
                      ->where('user_id', '=', $user)
                      ->get();

      return view('user.user-profile')->with('users', $userData)
                                      ->with('campaigns', $campaignData);
    }

    public function getUserData(Request $request) {

      $user = Auth::user()->id;

      $userInfo = DB::table('users')->where('id', '=', $user)->get();

      return view ('user.edit-profile')->with('users', $userInfo)->withInput($request->except('password'));
    }

    public function updateUser(Request $request) {

      $firstname = $request->input('first_name');
      $lastname = $request->input('last_name');
      $email = $request->input('email');
      $datetime = new DateTime ();
      $user = Auth::user()->id;

      $UpdateData = DB::table('users')->where('id', '=', $user)
                                      ->update(['first_name' => $firstname,
                                               'last_name' => $lastname,
                                               'email' => $email,
                                               'updated_at' => $datetime]);
    
      return view('user.updated-profile')->with('first_name', $firstname)
                                         ->with('last_name', $lastname)
                                         ->with('mail', $email);
    }

    public function deleteUser() {

      $user = Auth::user()->id;

      $deleteUser = DB::table('users')->where('id', '=', $user)
                                      ->delete();
      return redirect('/');
    }
}
