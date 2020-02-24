<?php

namespace App\Http\Controllers\Admin;

use DB;
use Input;
use Admin;
use Auth;
use DateTime;
use Carbon\Carbon;
use Mail;
use Redirect;
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
    $campaignData = DB::table('campaigns')
    ->join('users', 'users.id', '=', 'campaigns.user_id')
    ->select('users.*', 'campaigns.*')
    ->orderBy('campaigns.created_at', 'asc')
    ->get();

    return view('admin.dashboard')->with('campaignsData', $campaignData);
  }

  public function getCreatedCampaign () {

    $campaignData = DB::table('campaigns')
    ->join('users', 'users.id', '=', 'campaigns.user_id')
    ->select('users.*', 'campaigns.*')
    ->orderBy('campaigns.created_at', 'asc')
    ->get();

    return view('admin.dashboard')->with('campaignsData', $campaignData);
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



    $getUser = DB::table('campaigns')->join('users', 'campaigns.user_id', '=', 'users.id')
    ->where('campaigns.id','=', $deletedCampaign)
    ->select('users.first_name', 'users.last_name','users.email','campaigns.title')
    ->get();

    foreach ($getUser as $user) {
      $email = $user->email;
      $fname = $user->first_name;
      $lname = $user->last_name;
      $campaignName = $user->title;
    }

    $campaignDel = DB::table('campaigns')
    ->where('id', '=', $deletedCampaign)
    ->delete();

    $data = array('firstname' => $fname,
    'lastname' => $lname,
    'campaign' => $campaignName);

    Mail::send('mail.delete-campaign', $data, function ($message) use ($email) {

      $message->from('fatinfatihashuhaime@gmail.com', 'MARiDONATE');

      $message->to($email);
      $message->subject('Campaign Deletd Notification');
    });

    return redirect()->back()->with('message','The campaign deleted!');
  }

  public function approvedCampaign (Request $request) {

    $datetime = new DateTime();

    $approvedCampaign = $request->input('app_campaign');

    $campaign = DB::table('campaigns')
    ->where('id', '=', $approvedCampaign)
    ->select('title As title',
    'goal_price As goal_price',
    'story As story',
    'deadline As deadline',
    'user_id As userId',
    'image_name As image_name')
    ->get();

    foreach ($campaign as $camp) {
      $campaigns = DB::table('approvedcampaigns')->insert(['user_id' => $camp->userId,
      'title' => $camp->title,
      'goal_price' => $camp->goal_price,
      'image_name' => $camp->image_name,
      'story' => $camp->story,
      'deadline' => $camp->deadline,
      'created_at' => $datetime]);
    }

    $getUser = DB::table('campaigns')->join('users', 'campaigns.user_id', '=', 'users.id')
    ->where('campaigns.id','=', $approvedCampaign)
    ->select('users.first_name', 'users.last_name','users.email','campaigns.title')
    ->get();

    $campaignApp = DB::table('campaigns')
    ->where('id', '=', $approvedCampaign)
    ->delete();

    foreach ($getUser as $user) {
      $email = $user->email;
      $fname = $user->first_name;
      $lname = $user->last_name;
      $campaignName = $user->title;
    }

    $data = array('firstname' => $fname,
    'lastname' => $lname,
    'campaign' => $campaignName);

    Mail::send('mail.approve-campaign', $data, function ($message) use ($email) {

      $message->from('fatinfatihashuhaime@gmail.com', 'MARiDONATE');

      $message->to($email);
      $message->subject('Campaign Approved Notification');
    });

    return redirect('/backend')->with('message','The campaign approved!');
  }

  public function getCampaignData (Request $request) {

    $editCampaign = $request->input('edit_campaign');

    $campaign = DB::table('campaigns')
    ->where('id', '=', $editCampaign)
    ->get();

    return view('admin.edit-campaign')->with('campaigns',$campaign);

  }

  public function updateCampaignData(Request $request) {

    $id = $request->input('campaignId');
    $title = $request->input('title');
    $goal_price = $request->input('goal_price');
    $story = $request->input('story');
    $deadline = $request->input('deadline');
    $userId = $request->input('userId');
    $datetime = new DateTime();

    $userEmail = DB::table('users')->where('id', '=', $userId)->get();

    foreach ($userEmail as $user) {
      $email = $user->email;
      $fname = $user->first_name;
      $lname = $user->last_name;
    }

    $UpdateData = DB::table('campaigns')->where('id', '=', $id)
    ->update(['title' => $title,
    'goal_price' => $goal_price,
    'story' => $story,
    'deadline' => $deadline,
    'updated_at' => $datetime]);

    $getCampaign = DB::table('campaigns')->where('id', '=', $id)->get();

    foreach ($getCampaign as $updated) {
      $campaignName = $updated->title;
    }

    $data = array('firstname' => $fname,
    'lastname' => $lname,
    'campaign' => $campaignName);

    Mail::send('mail.test', $data, function ($message) use ($email) {

      $message->from('fatinfatihashuhaime@gmail.com', 'MARiDONATE');

      $message->to($email);
      $message->subject('Campaign Update Notification');
    });

    return redirect('/backend')->with('message','The campaign updated!');

  }

  public function showApproved() {

    $approved = DB::table('approvedcampaigns')->get();

    return view('admin.display-approved')->with('approvedCampaigns', $approved);
  }

  public function showDeleted() {

    $deleted = DB::table('deletedcampaigns')->get();

    return view('admin.display-deleted')->with('deletedCampaigns', $deleted);
  }

  public function getEndedCampaign () {

    $endedCampaign = DB::table('endedcampaigns')->get();

    return view('admin.display-ended')->with('endedCampaigns', $endedCampaign);
  }

  public function getDonation() {

  }

  public function approvedCampaignDetails(Request $request) {
    $campaignId = $request->input('campaignID');
    $campaignData = DB::table('approvedcampaigns')->where('app_camp_id', '=', $campaignId)->get();
    $userData = DB::table('users')->where('id', '=', $campaignId)->get();

    return view('admin.app-view-campaigns')->with('campaigns', $campaignData)
    ->with('users', $userData);

  }

  public function deletedCampaignDetails(Request $request) {
    $campaignId = $request->input('campaignID');
    $campaignData = DB::table('deletedcampaigns')->where('del_camp_id', '=', $campaignId)->get();
    $userData = DB::table('users')->where('id', '=', $campaignId)->get();

    return view('admin.del-view-campaigns')->with('campaigns', $campaignData)
    ->with('users', $userData);

  }

  public function endedCampaignDetails(Request $request) {
    $campaignId = $request->input('campaignID');

    $campaignData = DB::table('endedcampaigns')->where('end_camp_id', '=', $campaignId)->get();
    $userData = DB::table('users')->where('id', '=', $campaignId)->get();

    return view('admin.end-view-campaigns')->with('campaigns', $campaignData)
    ->with('users', $userData);
  }

}
