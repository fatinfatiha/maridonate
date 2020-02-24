@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Approved Campaign</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"> <i class="fas fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div style="padding: 80px 0px;">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-75">
                    <h2>Approved Campaigns</h2>
                    <!-- <div class="icon-img">
                        <img src="images/img/icon-img/1.png" alt="">
                    </div> -->
                    <!-- <p>There are many variations of azer duskam of Lorem Ipsum available,</p> -->
                </div>
            </div>
        </div>

        <?php
          $numOfCols = 3;
          $rowCount = 0;
          $bootstrapColWidth = 12 / $numOfCols;
         ?>

         <div class="row">
           <div class="">
             <div class="container">
               <div class="row">
                 @foreach ($approvedCampaigns as $campaign)
                 <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                   <div class="">
                     <!-- <img src="https://cdn.pixabay.com/photo/2016/10/27/14/23/poor-1775239__340.jpg" alt="Cinque Terre"> -->
                     <!-- <img src="/uploads/{{$campaign->image_name}}" alt=""> -->
                     <!-- <img src="/uploads/430915_opt.jpg" alt=""> -->
                       <!-- <img src="/images/slider/galaxy1.jpg" alt=""> -->
                     <div class="single-causes mb-30">
                         <a href="#"><img src="assets/img/causes/1.jpg" alt="" /></a>
                         <div class="causes-info">
                             <!-- <h3><a href="#">Children Case</a></h3> -->
                             <h3><a href="#" style="text-transform:capitalize;">{{$campaign->title}}</a></h3>
                             <!-- <p>{{$campaign->story}}</p> -->
                             <div class="row">
                               <div class="col-md-8 doller-target">
                                 <h4>Fund Raised : <span>MYR {{$campaign->fundRaised}}</span></h4>
                               </div>
                             </div>
                             <div class="row">
                               <div class="col-md-8 doller-target">
                                 <h4>Fund Needed : <span>MYR {{$campaign->goal_price}}</span></h4>
                               </div>
                             </div>

                             <!-- <div class="causes-meta">
                                 <div class="doller-target f-left">
                                     <h4>Fund Raised : <span>MYR {{$campaign->fundRaised}}</span></h4>
                                 </div>
                                 <div class="doller-target f-right">
                                     <h4>Fund Needed : <span>MYR {{$campaign->goal_price}}</span></h4>
                                 </div>
                             </div> -->
                             <form class="causes-meta" action="{{url('/backend/app-campaign-details')}}" method="post">
                               <!-- <a class="button theme-bg" href="{{url('/campaign-details')}}">View Details
                                 <input type="hidden" name="campaignID" value="{{$campaign->app_camp_id}}">
                               </a> -->

                               <form class="" action="{{url('/backend/app-campaign-details')}}" method="post">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <input type="hidden" name="campaignID" value="{{$campaign->app_camp_id}}">
                                 <button type="submit" name="button" class="theme-bg btn btn-primary pull-right">View Details</button>
                               </form>
                             </form>

                         </div>
                     </div>
                   </div>
                 </div>

                 <?php
                     $rowCount++;
                     if($rowCount % $numOfCols == 0) echo '<div class="container"> <div class="row">';
                 ?>
                 @endforeach
               </div>
             </div>
             </div>
           </div>
         </div>
         </div>
      </div>
    </div>
  </div>
</section>
@endsection
