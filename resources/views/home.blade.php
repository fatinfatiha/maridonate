@extends('layouts.master')

@section('content')
<style media="screen">
.carousel-item {
height: 65vh;
min-height: 350px;
background: no-repeat center center scroll;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="alert alert-success">
                  <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>
            </div>
        </div>
    </div>
</div> -->

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/O7fzqFEfLlo/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<div class="container" style="position:relative">
  <div class="services-area content-section">
      <div class="container">
          <div class="all-single-service white-bg pt-120 pb-90">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-title text-center mb-75">
                          <h2>Our Goal</h2>
                          <div class="icon-img">
                              <img src="assets/img/icon-img/1.png" alt="">
                          </div>
                          <p>There are many variations of azer duskam of Lorem Ipsum available,</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4 col-sm-4 text-center mb-30">
                      <div class="single-service">
                          <i class="icon-happy"></i>
                          <h3>Save Childrean </h3>
                          <p>There are many variations of passages of Lorem Ipsum available,</p>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4 text-center mb-30">
                      <div class="single-service">
                          <i class="icon-profile-male"></i>
                          <h3>People Care</h3>
                          <p>There are many variations of passages of Lorem Ipsum available,</p>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4 text-center mb-30">
                      <div class="single-service">
                          <i class="icon-globe"></i>
                          <h3>Peace The Planet</h3>
                          <p>There are many variations of passages of Lorem Ipsum available,</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail campaign-box">
            <img src="https://cdn.pixabay.com/photo/2016/10/27/14/23/poor-1775239__340.jpg" alt="Cinque Terre">
            <div class="single-causes mb-30">
                <a href="#"><img src="assets/img/causes/1.jpg" alt="" /></a>
                <div class="causes-info">
                    <h3><a href="#">Children Safety</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                    <div class="causes-meta">
                        <div class="doller-target f-left">
                            <h4>Fill Up : <span>$25,000</span></h4>
                        </div>
                        <div class="doller-target f-right">
                            <h4>Target : <span>$30,000</span></h4>
                        </div>
                    </div>
                    <a class="button theme-bg" href="#">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail campaign-box">
            <img src="https://cdn.pixabay.com/photo/2016/07/29/06/08/people-1550501__340.jpg" alt="Cinque Terre">
            <div class="single-causes mb-30">
                <a href="#"><img src="assets/img/causes/2.jpg" alt="" /></a>
                <div class="causes-info">
                    <h3><a href="#">Clean Watter</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                    <div class="causes-meta">
                        <div class="doller-target f-left">
                            <h4>Fill Up : <span>$33,000</span></h4>
                        </div>
                        <div class="doller-target f-right">
                            <h4>Target : <span>$50,000</span></h4>
                        </div>
                    </div>
                    <a class="button theme-bg" href="#">Read More</a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail campaign-box">
            <img src="https://cdn.pixabay.com/photo/2015/09/23/09/33/war-953246__340.jpg" alt="Cinque Terre">
            <div class="single-causes mb-30">
                <a href="#"><img src="assets/img/causes/3.jpg" alt="" /></a>
                <div class="causes-info">
                    <h3><a href="#">Education Help</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                    <div class="causes-meta">
                        <div class="doller-target f-left">
                            <h4>Fill Up : <span>$43,000</span></h4>
                        </div>
                        <div class="doller-target f-right">
                            <h4>Target : <span>$70,000</span></h4>
                        </div>
                    </div>
                    <a class="button theme-bg" href="#">Read More</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-5 col-md-4">
          <a class="button theme-bg" href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
