<?php

namespace App\Http\Controllers;

use Request;
use DB;

use Illuminate\Support\Facades\Auth;

  class testController extends Controller
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

      public function store(Request $request)
      {
          // $campaignData = $this->validate($request, [
          //                 'title' => 'required|max:255',
          //                 'goal_price' => 'required|numeric',
          //                 'image_name' => 'image',
          //                 'story' => 'required',
          //                 'deadline' => 'required|date']);

          $user =   $this->auth = Auth::guard(null)->user();
          $title = $request->input('title');
          $goal_price = $request->input('goal_price');
          $image_name = $request->input('image_name');
          $story = $request->input('story');
          $deadline = $request->input('deadline');

          dd(Request::all());

          // $data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
          // DB::table('student')->insert($data);




          return view('/test')->with('campaigns', $data);

          $data = $request->all();
          $data['user_id'] = $this->auth->id;

          // DB::beginTransaction();

          // $campaign = Campaign::create($data);

          // $file = $request->file('image_name');
          // $filename = 'main-' . str_random(3) . '.' . $file->getClientOriginalExtension();
          // $fasadf = Storage::put(
          //     "images/campaigns/{$campaign->campaign_slug}/{$filename}",
          //     file_get_contents($file->getRealPath())
          // );

          // DB::rollBack();print_r($fasadf);exit;

          // print_r($campaign->toArray());

          // DB::rollBack();
          // echo ' 1 ';exit;
          // DB::commit();

  //        print_r($request->all());exit;
          // dd($request->all());
      }

      public function getWelcomePage() {

        $latestCampaigns = DB::table('campaigns')->orderBy('created_at', 'desc')->limit(3)->get();

        // dd($latestCampaigns);

        return view ('welcome')->with('latests', $latestCampaigns);
      }

      public function getCampaignData () {

        $campaignData = DB::table('campaigns')
                        ->join('users', 'users.id', '=', 'campaigns.user_id')
                        ->select('users.*', 'campaigns.*')
                        ->get();

        // dd($campaignData);

        return view('admin.dashboard')->with('campaignsData', $campaignData);
      }
  }
