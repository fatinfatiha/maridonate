<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class BaseController extends Controller {

  public function getWelcomePage() {

    $latestCampaigns = DB::table('campaigns')->orderBy('created_at', 'desc')->limit(3)->get();

    // dd($latestCampaigns);

    return view ('welcome')->with('latests', $latestCampaigns);
  }
}
