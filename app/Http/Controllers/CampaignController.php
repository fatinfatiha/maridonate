<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use App\Campaign;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Mail;
use Carbon\Carbon;

class CampaignController extends Controller
{
    /**
     * @var
     */
    protected $auth;

    /**
     *
     */
    function __construct()
    {
        $this->auth = Auth::guard(null)->user();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('campaigns.create');
    }

    public function store(Request $request) {
        $campaignData = $this->validate($request, ['title' => 'required|max:255',
                                                              'goal_price' => 'required|numeric',
                                                              'image_name',
                                                              'story' => 'required',
                                                              'deadline' => 'required|date']);

        $userId = Auth::user()->id;
        $title = $request->input('title');
        $goal_price = $request->input('goal_price');
        $story = $request->input('story');
        $deadline = $request->input('deadline');
        $datetime = new DateTime();
        $campaign = new Campaign($request->input());

        $image_name = $request->input('image_name');
        $image_path = $request->file('image_name')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $fullPath = $request->file('image_name')->move($destination, $image_path);

        // dd($deadline);

        $users = DB::table('users')->where('id', '=', $userId)->get();

        foreach ($users as $user) {
          $fname = $user->first_name;
          $lname = $user->last_name;
          $email = $user->email;
        }

        $campaigns = DB::table('campaigns')->insert(['user_id' => $userId,
                                                    'title' => $title,
                                                    'goal_price' => $goal_price,
                                                    'image_name' => $image_path,
                                                    'story' => $story,
                                                    'deadline' => $deadline,
                                                    'created_at' => $datetime]);

      $data = array('firstname' => $fname,
                    'lastname' => $lname,
                    'campaign' => $title,
                    'email' => $email);

      Mail::send('mail.campaign-mail', $data, function ($message) use ($fullPath) {

      $message->from('fatinfatihashuhaime@gmail.com', 'MARiDONATE');

      $message->to('fatinfatihashuhaime@gmail.com');
      $message->subject('New Campaign Created!');
      $message->embed($fullPath);
      });

        return redirect()->back()->with('message', 'Campaign created! Your campaign will be process for admin verification. MARiDONATE Team will notify you once your campaign approved. Thankyou.');
    }

    public function view () {

      $allCampaigns = DB::table('approvedcampaigns')->get();
      $datetime = new DateTime ();

      $today = Carbon::today();

      $user = Auth::user()->id;

      $year = $today->year;
      $month = $today->month;
      $day = $today->day;

      $currentDate = $day."/".$month."/".$year;

      foreach ($allCampaigns as $campaign) {
        if ($campaign->deadline <= $currentDate) {
          $endCampaigns = DB::table('approvedcampaigns')->where('deadline', '=', $currentDate)->get();
          foreach ($endCampaigns as $ended) {
            $endedCampaign = DB::table('endedcampaigns')->insert(['user_id' => $user,
                                                                 'title' => $ended->title,
                                                                 'goal_price' => $ended->goal_price,
                                                                 'image_name' => $ended->image_name,
                                                                 'story' => $ended->story,
                                                                 'deadline' => $ended->deadline,
                                                                 'created_at' => $datetime]);

             $deleteCampaign = DB::table('approvedcampaigns')->where('deadline', '=', $currentDate)->delete();

          }
        }
     }
     return view('/campaigns/view-campaigns')->with('campaigns', $allCampaigns);
   }

    public function getCampaignDetails(Request $request) {

      $campaignId = $request->input('campaignID');

      $campaignData = DB::table('approvedcampaigns')->where('app_camp_id', '=', $campaignId)->get();
      $userData = DB::table('users')->where('id', '=', $campaignId)->get();

      return view('campaigns.campaign-details')->with('campaigns', $campaignData)
                                               ->with('users', $userData);

    }

    public function getCampaign(Request $request) {

      $campaignId = $request->input('campaignId');

      $campaignData = DB::table('approvedcampaigns')->where('app_camp_id', '=', $campaignId)->get();

      return view('campaigns.donate')->with('campaigns', $campaignData);
    }

    public function getDonationData (Request $request) {
      $amount = $request->input('amount');
      $date = $request->input('transDate');
      $campaign = $request->input('campaignId');
      $datetime = new DateTime();

      $user = Auth::user()->id;

      $FileName = $request->file('attachReceipt');
      $FilePath = $request->file('attachReceipt')->getClientOriginalName();

      $FilePath = $FileName->getClientOriginalName();
      $destination = base_path() . '/public/files';
      $fullPath = $request->file('attachReceipt')->move($destination, $FilePath);

      $donation = DB::table('donation')->insert(['user_id' => $user,
                                                 'campaign_id' => $campaign,
                                                 'amount' => $amount,
                                                 'transactionDate' => $date,
                                                 'receipt' => $FilePath,
                                                 'created_at' => $datetime]);
      $userEmail = DB::table('users')->where('id', '=', $user)->get();

      foreach ($userEmail as $user) {
        $email = $user->email;
      }

      $getCurrentFund = DB::table('approvedcampaigns')->where('app_camp_id', '=', $campaign)->get();

      foreach ($getCurrentFund as $fund) {
        if ($fund->fundRaised == $amount) {
          DB::table('endedcampaigns')-insert(['user_id' => $user,
                                               'title' => $getCurrentFund->title,
                                               'goal_price' => $getCurrentFund->goal_price,
                                               'image_name' => $getCurrentFund->image_name,
                                               'story' => $getCurrentFund->story,
                                               'deadline' => $getCurrentFund->deadline,
                                               'created_at' => $datetime]);

           DB::table('approvedcampaigns')->where('app_camp_id', '=', $campaign)->delete();
        }
        else {
          $newTotalFund = $fund->fundRaised + $amount;
        }
      }

      $updateCampaignFund = DB::table('approvedcampaigns')->where('app_camp_id', '=', $campaign)
                                                          ->update(['fundRaised' => $newTotalFund]);

      $img_url = env('APP_URL')."/images/logo2.png";

      foreach ($userEmail as $user) {
        $fname = $user->first_name;
        $lname = $user->last_name;
      }

      foreach ($getCurrentFund as $campaign) {
        $campaignName = $campaign->title;
        $totalFund = $campaign->fundRaised;
      }

      $data = array('firstname' => $fname,
                    'lastname' => $lname,
                    'campaign' => $campaignName,
                    'totalFund' => $newTotalFund,
                    'donation' => $amount,
                    'logo' => $img_url);

      Mail::send('mail.donate', $data, function ($message) use ($fullPath,$img_url) {

      $message->from('fatinfatihashuhaime@gmail.com', 'MARiDONATE');

      $message->to('fatinfatihashuhaime@gmail.com');
      $message->subject('Donation Data From User');
      $message->getSwiftMessage($img_url);
      $message->embed($fullPath);
      });

      return redirect('/campaigns')->with('message', 'Thank you! Your donation have been notified to our admin.');

    }
}
