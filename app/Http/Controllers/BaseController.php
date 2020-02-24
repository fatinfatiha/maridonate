<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class BaseController extends Controller {

  public function getWelcomePage() {

    $latestCampaigns = DB::table('approvedcampaigns')->orderBy('created_at', 'desc')->limit(3)->get();

    return view ('welcome')->with('latests', $latestCampaigns);
  }

  public function getWelcomePageB() {

    $latestCampaigns = DB::table('campaigns')->orderBy('created_at', 'desc')->limit(3)->get();

    return view ('welcome-backup')->with('latests', $latestCampaigns);
  }
}
