<?php

namespace App\Http\Controllers\Admin;

use DB;
use Input;
use Admin;
use Auth;
use DateTime;
use Carbon\Carbon;
// use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('admin.dashboard');
    }

    public function getCreatedCampaign () {

      $campaignData = DB::table('campaigns')
                      ->join('users', 'users.id', '=', 'campaigns.user_id')
                      ->select('users.*', 'campaigns.*')
                      ->orderBy('campaigns.created_at', 'asc')
                      ->get();

      return view('admin.created-campaign')->with('campaignsData', $campaignData);
    }

    public function deleteCampaign (Request $request) {

      $datetime = new DateTime();

      $deletedCampaign = $request->input('del_campaign');

      $campaign = DB::table('campaigns')
                    ->where('id', '=', $deletedCampaign)
                    ->select('title As title',
                             'goal_price As goal_price',
                             'story As story',
                             'deadline As deadline',
                             'user_id As userId',
                             'image_name As image_name')
                    ->get();

      foreach ($campaign as $camp) {
        $campaigns = DB::table('deletedcampaigns')->insert(['user_id' => $camp->userId,
                                                            'title' => $camp->title,
                                                            'goal_price' => $camp->goal_price,
                                                            'image_name' => $camp->image_name,
                                                            'story' => $camp->story,
                                                            'deadline' => $camp->deadline,
                                                            'created_at' => $datetime]);

      }

      $campaignDel = DB::table('campaigns')
                    ->where('id', '=', $deletedCampaign)
                    ->delete();
                    dd($campaignDel);
    }

    public function approvedCampaign (Request $request) {

      $datetime = new DateTime();

      $approvedCampaign = $request->input('app_campaign');
      // dd($approvedCampaign);

      $campaign = DB::table('campaigns')
                    ->where('id', '=', $approvedCampaign)
                    ->select('title As title',
                             'goal_price As goal_price',
                             'story As story',
                             'deadline As deadline',
                             'user_id As userId',
                             'image_name As image_name')
                    ->get();
      // dd($campaign);

      foreach ($campaign as $camp) {
        $campaigns = DB::table('approvedcampaigns')->insert(['user_id' => $camp->userId,
                                                            'title' => $camp->title,
                                                            'goal_price' => $camp->goal_price,
                                                            'image_name' => $camp->image_name,
                                                            'story' => $camp->story,
                                                            'deadline' => $camp->deadline,
                                                            'created_at' => $datetime]);
                                                            // dd($campaigns);
      }

      $campaignApp = DB::table('campaigns')
                    ->where('id', '=', $approvedCampaign)
                    ->delete();
                    // dd($campaignApp);
    }

    public function showApproved() {

      $approved = DB::table('approvedcampaigns')->get();

      // dd($approved);

      return view('admin.display-approved')->with('approvedCampaigns', $approved);
    }

    public function showDeleted() {

      $deleted = DB::table('deletedcampaigns')->get();

      // dd($deleted);

      return view('admin.display-deleted')->with('deletedCampaigns', $deleted);
    }

    public function getEndedCampaign () {

      $today = Carbon::today();

      $year = $today->year;
      $month = $today->month;
      $day = $today->day;

      // $todayDate = $month + "/" + $day + "/" + $year;

      // $ff = $todayDate"jsjsjs";
      // dd($todayDate);

      $endedCampaign = DB::table('campaigns')
                          ->where('deadline', '<', $currentDate)
                          ->get();
    }



}
