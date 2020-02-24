@extends('layouts.master')

@section('content')
<!-- header end -->
<!-- breadcrumb start -->
<!-- <div class="breadcrumb-area pt-240 pb-125" style="background-image:url(images/header/header1.jpg);" data-overlay="5">
<div class="container">
<div class="breadcrumb-text text-center z-index">
<h2>Causes details</h2>
</div>
</div>
</div> -->

<!-- TWO COLUMNS  -->
<div class="row campaign-details-section">
	<div class="col-md-12">
		<div class="section-title text-center mb-75">
			<h2 style="text-shadow: 0 0 4px #555;">Campaign Details</h2>
			<div class="icon-img">
				<img src="images/img/icon-img/1.png" alt="">
			</div>
			<p>You may never know what results come of your action,
But if you do nothing there will be no result</p>

		</div>
	</div>
</div>
<!-- breadcrumb end -->
<!-- grow area start -->

@foreach ($campaigns as $campaign)
<!-- FULL ROW -->
<!-- <div class="causes-all-area">
<div class="container">
<div class="causes-img-text">
<div class="row">
<div class="col-md-6">
<div class="causes-text">
<h3>{{$campaign->title}}</h3>
<p>{{$campaign->story}}</p>
<p class="causes-pera">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat.</p>
</div>
</div>
<div class="col-md-6">
<img src="uploads/{{$campaign->image_name}}" alt="">
</div>
</div>
<div class="row">
<div class="causes-price">
<h4> $43,000 <span>Of $70,000 Raised</span></h4>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
</div>
</div>
</div>
</div>
<div class="row">
<a href="/donate" class="btn btn-success">Donate</a>

</div>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Confirmation</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
<form class="form-inline">
<div class="form-group">
<label class="sr-only" for="exampleInputAmount">Amount (in Malaysia Ringgit)</label>
<div class="input-group">
<div class="input-group-addon">MYR</div>
<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
<div class="input-group-addon">.00</div>
</div>
</div>
<button type="submit" class="btn btn-success">Transfer cash</button>
</form>
</div>
<div class="modal-footer">
<a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>
<a href="#" class="btn btn-danger">Yes, delete it!</a>
</div>
</div>
</div>
</div> -->

<!-- SHARE BUTTON -->
<!-- <div class="share-icon">
<h4>share :</h4>
<ul>
<li><a class="btn btn-social-icon btn-facebook"><i class="fab fa-facebook-square"></i></a></li>
<li><a class="btn btn-social-icon btn-twitter"><i class="fab fa-twitter-square"></i></a></li>
<li><a class="btn btn-social-icon btn-googleplus"><i class="fab fa-telegram"></i></a></li>
<li><a class="btn btn-social-icon btn-instragram"><i class="fab fa-instagram"></i></a></li>
</ul>
</div> -->

<!-- COMMENT -->
<!-- <div class="leave-text-comment">
<div class="leave-text">
<h3>Leave A Comment</h3>
<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
</div>
<div class="leave-form">
<form action="#">
<div class="row">
<div class="col-md-6">
<input placeholder="name" type="text">
</div>
<div class="col-md-6">
<input placeholder="phone" type="text">
</div>
<div class="col-md-12">
<textarea placeholder="message"></textarea>
<button class="submit" type="submit">
Send Now
</button>
</div>
</div>
</form>
</div>
</div> -->
<!-- </div>
</div>
</div> -->

<div class="container">
	<div class="">
		<div class="panel panel-default">
			<div class="panel-heading">  <h4>Campaign Details </h4></div>
			<div class="panel-body">
				<div class="row">
					<form class="" action="{{url('/donate')}}" method="post">
						<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
							<!-- <img alt="Campaign Pic" src="uploads/{{$campaign->image_name}}" id="profile-image1" class="img-responsive"> -->
							<embed src="/files/{{$campaign->image_name}}" type="application/pdf" width="100%" height="500px" />
						</div>
						<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
							<div class="" >
								<h2>{{$campaign->title}}</h2>
								<p style="text-align:justify;">{{$campaign->story}}</p>
									<p><b>Campaign Ends on {{$campaign->deadline}}</b></p>
								<input type="hidden" name="campaignId" value="{{$campaign->app_camp_id}}">
							</div>
							<hr>
							<ul class="container details" >
								<li>
									<a href="#">
										<!-- <p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>sasas</p> -->
									</a>
								</li>
								<!-- <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>email</p></li> -->
							</ul>

							<!-- <div class="col-sm-5 col-xs-6 tital " >Date Of Joining: 15 Jun 2016</div> -->
							<div class="container">
								<div class="row">
									<div class="col-md-6 doller-target">
										<h3> <b>MYR{{$campaign->fundRaised}}</b> <span>Of <b>MYR{{$campaign->goal_price}}</b> Raised</span></h3>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"  style="width: calc( ({{$campaign->fundRaised}} / {{$campaign->goal_price}}) * 100% );">
												<?php
													 $totalFund = ($campaign->fundRaised/$campaign->goal_price)*100;
													 $fund = number_format((float)$totalFund, 0, '.', '')
												 ?>
												 <div class="" style="text-align:center;">
													 {{$fund}}%

												 </div>
											</div>
										</div>

									</div>
								</div>
								<hr>
								<div class="row col-md-4">
									<!-- <a href="/donate" class="btn btn-success">Donate</a> -->
									<!-- <button class="btn btn-primary" id="btn-confirm"><i class="fas fa-donate"></i> Donate Campaign</button> -->
									<!-- <a href="/donate" class="btn btn-primary"><i class="fas fa-donate"></i> Donate Campaign</a> -->

									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="submit" name="button" class="btn btn-primary"><i class="fas fa-donate"></i>Donate Campaign</button>
								</form>
							</div>
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
				<div class="row">
					<div class="pull-right">

						<div class="col-md-4">
							<a href="/campaigns" class="btn btn-default">Back</a>
						</div>
						<div class="col-md-4">
							<a href="/" class="btn btn-success">Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MODAL DONATE POPUP -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Confirmation</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form class="" enctype="multipart/form-data" action="{{url('/donation')}}" method="get">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Amount (in Malaysia Ringgit)</label>
						<div class="input-group">
							<div class="input-group-addon">MYR</div>
							<input type="text" class="form-control" name="amount" placeholder="Amount">
							<div class="input-group-addon">.00</div>
						</div>
					</div>
					<!-- <div class="form-group">
					<label class="sr-only" for="exampleInputAmount">Referrence No</label>
					<div class="input-group">
					<div class="input-group-addon">Referrence No.</div>
					<input type="text" class="form-control" name="refNo" placeholder="Referrence No.">
				</div>
			</div> -->
			<div class="form-group">
				<label class="sr-only" for="exampleInputAmount">Transaction Date</label>
				<div class="input-group">
					<div class="input-group-addon">Transaction Date</div>
					<!-- <input type="text" class="form-control" id="exampleInputAmount" placeholder="Transaction Date"> -->
					<input type="date" class="form-control DateField" name="transDate" placeholder="Transaction Date">
				</div>
			</div>
			<div class="form-group">
				<label class="sr-only" name="resume">Attach Receipt</label>
				<div class="input-group">
					<div class="input-group-addon">Attach Receipt</div>
					<input  type="file" placeholder="Receipt" name="attachReceipt" class="form-control" accept="pdf/*"/>
					<input type="hidden" name="campaignId" value="{{$campaign->app_camp_id}}">
					<span class="required" id='spnFileError'></span>
				</div>
			</div>
			<!-- <button type="submit" class="btn btn-success">Submit</button> -->
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
	<!-- <div class="modal-footer">
	<a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<button type="submit" class="btn btn-success">Submit</button>

	<a href="#" class="btn btn-danger">Yes, delete it!</a>
</div> -->
</div>
</div>
</div>

<script type="text/javascript">
var modalConfirm = function(callback){

	$("#btn-confirm").on("click", function(){
		$("#mi-modal").modal('show');
	});

	$("#modal-btn-si").on("click", function(){
		callback(true);
		$("#mi-modal").modal('hide');
	});

	$("#modal-btn-no").on("click", function(){
		callback(false);
		$("#mi-modal").modal('hide');
	});
};

modalConfirm(function(confirm){
	if(confirm){
		//Acciones si el usuario confirma
		$("#result").html("CONFIRMADO");
	}else{
		//Acciones si el usuario no confirma
		$("#result").html("NO CONFIRMADO");
	}
});
</script>
@endforeach



@endsection
