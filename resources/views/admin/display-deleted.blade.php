@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Deleted Campaign</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"> <i class="fas fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div class="content-section-campaign">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-75">
                    <h2>Deleted Campaigns</h2>
                    <div class="icon-img">
                        <img src="images/img/icon-img/1.png" alt="">
                    </div>
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
                @foreach ($deletedCampaigns as $campaign)
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                  <div class="thumbnail campaign-box">
                    <!-- <img src="https://cdn.pixabay.com/photo/2016/10/27/14/23/poor-1775239__340.jpg" alt="Cinque Terre"> -->
                    <img src="/uploads/{{$campaign->image_name}}" alt="">
                    <!-- <img src="/uploads/430915_opt.jpg" alt=""> -->
                      <!-- <img src="/images/slider/galaxy1.jpg" alt=""> -->
                    <div class="single-causes mb-30">
                        <a href="#"><img src="assets/img/causes/1.jpg" alt="" /></a>
                        <div class="causes-info">
                            <!-- <h3><a href="#">Children Case</a></h3> -->
                            <h3><a href="#">{{$campaign->title}}</a></h3>
                            <!-- <p>{{$campaign->story}}</p> -->
                            <div class="causes-meta">
                                <div class="doller-target f-left">
                                    <h4>Fill Up : <span>$25,000</span></h4>
                                </div>
                                <div class="doller-target f-right">
                                    <h4>Target : <span>MYR{{$campaign->goal_price}}</span></h4>
                                </div>
                            </div>
                            <a class="button theme-bg" href="#">View Details</a>
                        </div>
                    </div>
                  </div>
                </div>

                <?php
                    $rowCount++;
                    if($rowCount % $numOfCols == 0) echo '<div class="row">';
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
</section>
@endsection
