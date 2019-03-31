<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use App\Campaign;
use Illuminate\Support\Facades\Auth;
use DateTime;

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

    public function store(Request $request)
    {
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
        $request->file('image_name')->move($destination, $image_path);

        // dd($deadline);



        $campaigns = DB::table('campaigns')->insert(['user_id' => $userId,
                                                    'title' => $title,
                                                    'goal_price' => $goal_price,
                                                    'image_name' => $image_path,
                                                    'story' => $story,
                                                    'deadline' => $deadline,
                                                    'created_at' => $datetime]);

        // dd($campaigns);

        return redirect()->back()->with('message', 'Campaign created!');
        //
        // $data = $request->all();
        // $data['user_id'] = $this->auth->id;

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

    public function view () {

      $allCampaigns = DB::table('campaigns')->get();

      // dd($allCampaign);

      return view('/campaigns/view-campaigns')->with('campaigns', $allCampaigns);
    }
}
