@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Approved Campaign Details</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"> <i class="fas fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
@foreach ($campaigns as $campaign)
<div class="container" style="padding-top:50px;">
	<div class="">
		<div class="">
			<!-- <div class="panel-heading">  <h4>Campaign Details </h4></div> -->
			<div class="panel-body" style="padding: 80px 50px 80px 50px;
                                    background: #fff;
                                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.58);
                                    border-radius: 4px;">
				<div class="row">
					<form class="" action="{{url('/donate')}}" method="post">
						<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
							<div class="" >
								<h2>{{$campaign->title}}</h2>
                @foreach ($users as $user)
                <p><b>Created by</b> : {{$user->first_name}} {{$user->first_name}}</p>
                <p><b>Email</b> : {{$user->email}}</p>
                @endforeach
								<input type="hidden" name="campaignId" value="{{$campaign->app_camp_id}}">
							</div>
              <div class="">
                <div class="">
                  <p><b>Funding Description</b> : {{$campaign->story}}</p>
                    <p><b>Deadline : {{$campaign->deadline}}</b></p>
                </div>
              </div>
							<ul class="container details" >

								<!-- <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>email</p></li> -->
							</ul>

							<!-- <div class="col-sm-5 col-xs-6 tital " >Date Of Joining: 15 Jun 2016</div> -->
							<div class="">
								<div class="row">
									<div class="col-md-6 doller-target">
										<h3> <b>MYR{{$campaign->fundRaised}}</b> <span>Of <b>MYR{{$campaign->goal_price}}</b> Raised</span></h3>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"  style="width: calc( ({{$campaign->fundRaised}} / {{$campaign->goal_price}}) * 100% );">
												<?php
													 $totalFund = ($campaign->fundRaised/$campaign->goal_price)*100;
													 $fund = number_format((float)$totalFund, 0, '.', '')
												 ?>
												 {{$fund}}%
											</div>
										</div>

									</div>
								</div>
								<!-- <div class="row col-md-4">
									<a href="/donate" class="btn btn-success">Donate</a>
									<button class="btn btn-primary" id="btn-confirm"><i class="fas fa-donate"></i> Donate Campaign</button>
									<a href="/donate" class="btn btn-primary"><i class="fas fa-donate"></i> Donate Campaign</a>

									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="submit" name="button" class="btn btn-primary"><i class="fas fa-donate"></i>Donate Campaign</button>
								</form>
							</div> -->
						</div>
						</div>
            <div class="row">
              <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                <!-- <img alt="Campaign Pic" src="uploads/{{$campaign->image_name}}" id="profile-image1" class="img-responsive"> -->
                <embed src="/files/{{$campaign->image_name}}" type="application/pdf" width="100%" height="500px" />
              </div>
            </div>
					</div>
					<!-- <div class="container">
						<div class="row">
							<div class="col-md-10 causes-price">
								<h4> $43,000 <span>Of $70,000 Raised</span></h4>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
									</div>
								</div>
							</div>
						</div>
						<div class="row col-md-4">
							<a href="/donate" class="btn btn-success">Donate</a>
							<button class="btn btn-primary" id="btn-confirm"><i class="fas fa-donate"></i> Donate Campaign</button>
							<a href="/donate" class="btn btn-primary"><i class="fas fa-donate"></i> Donate Campaign</a>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" name="button" class="btn btn-primary"><i class="fas fa-donate"></i>Donate Campaign</button>
						</form>
					</div>
				</div> -->
				<!-- <div class="row">
					<div class="pull-right">

						<div class="col-md-4">
							<a href="/campaigns" class="btn btn-default">Back</a>
						</div>
						<div class="col-md-4">
							<a href="/" class="btn btn-success">Home</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection
