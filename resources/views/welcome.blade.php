@extends('layouts.master')

@section('content')

<!-- <div class='fullscreenDiv'>
  <div class="center">Hello World</div>
  <img src="images/slider/galaxy1.jpg" alt="">
</div> -->
<!-- <div class="row">
  <div class="welcome-img">
    <img src="/images/slider/mountain.jpg" alt="">

    <div class="welcome-text">
      <h2>MARiDONATE</h2>
    </div>
  </div>
</div> -->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>MARiDONATE</h1>
            <h3 style="text-shadow: 0 0 4px #fbf9f9;">Crowdfunding Platform for Fundraisers in UiTM Jasin</h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>Give today</h1>
            <!-- <h3 style="text-shadow: 0 0 4px #fbf9f9;">Get start your next awesome project</h3> -->
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>make tomorrow better.</h1>
            <!-- <h3 style="text-shadow: 0 0 4px #fbf9f9;">Get start your next awesome project</h3> -->
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
  </div>
</div>


<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div> -->

		<!-- slider-area start -->
		<!-- <div class="slider-area">
            <div class="slider-active owl-carousel">
                <div class="single-slider pb-340 pt-240 bg-img" style="background:url(assets/images/slider/galaxy1.jpg);" data-overlay="5">
                    <div class="container">
                        <div class="slider-text text-center z-index">
                            <h2 class="animated">Help The <span>People</span></h2>
                            <h1 class="animated">Grow up <span>humanity</span> & <span>kindness</span></h1>
                            <p class="animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            <a class="button theme-bg animated" href="#">DONATE NOW</a>
                        </div>
                    </div>
                </div>
                <div class="single-slider pb-340 pt-240 bg-img" style="background-image:url(assets/img/slider/5.jpg);" data-overlay="5">
                    <div class="container">
                        <div class="slider-text text-center z-index">
                            <h2 class="animated">Help The <span>People</span></h2>
                            <h1 class="animated">Grow up <span>humanity</span> & <span>kindness</span></h1>
                            <p class="animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            <a class="button theme-bg animated" href="#">DONATE NOW</a>
                        </div>
                    </div>
                </div>
                <div class="single-slider pb-340 pt-240 bg-img" style="background-image:url(assets/img/slider/6.jpg);" data-overlay="5">
                    <div class="container">
                        <div class="slider-text text-center z-index">
                            <h2 class="animated">Help The <span>People</span></h2>
                            <h1 class="animated">Grow up <span>humanity</span> & <span>kindness</span></h1>
                            <p class="animated">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            <a class="button theme-bg animated" href="#">DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
		</div> -->

      <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="/images/slider/mountain.jpg" alt="" style="width:100%; opacity: 0.7;">
          </div>

          <div class="item">
            <img src="/images/slider/galaxy4.jpg" alt="" style="width:100%; opacity: 0.7;">
          </div>

          <div class="item">
            <img src="/images/slider/galaxy5.jpg" alt="" style="width:100%; opacity: 0.7;">
          </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->


        <!-- slider end -->
        <!-- services start -->

        <div class="container" style="position:relative">
          <div class="services-area content-section">
              <div class="fixed-width">
                  <div class="all-single-service white-bg pt-120 pb-90">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="section-title text-center mb-75">
                                  <h2 style="text-shadow: 0 0 4px #555;"><b>MARiDONATE Goal</b></h2>
                                  <div class="icon-img">
                                      <!-- <img src="images/img/icon-img/1.png" alt=""> -->
                                      <i class="fas fa-hands-helping fa-3x"></i>
                                  </div>
                                  <p>We build this platform because we know that charity sees the need, not the cause.</p>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-sm-4 text-center mb-30">
                              <div class="single-service">
                                  <i class="far fa-smile"></i>
                                  <h3>Happiness </h3>
                                  <p>A small charity has a big impact. An effort made for the happiness of others lifes us above ourselves.</p>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-4 text-center mb-30">
                              <div class="single-service">
                                  <i class="far fa-user"></i>
                                  <h3>People Care</h3>
                                  <p>Be a part of the breakthrough and make someone’s dream come true. Be part of a change in the world.</p>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-4 text-center mb-30">
                              <div class="single-service">
                                  <i class="fas fa-globe-europe"></i>
                                  <h3>Help People</h3>
                                  <p>Doing nothing for others is the undoing of ourselves. Donation shows appreciation.</p>
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
                  <div class="col-md-12">
                      <div class="section-title text-center mb-75">
                          <h2 style="text-shadow: 0 0 4px #555;"><b>MARiDONATE Latest Campaigns</b></h2>
                          <div class="icon-img">
                              <!-- <img src="images/img/icon-img/1.png" alt=""> -->
                              <i class="fas fa-hands-helping fa-3x"></i>
                          </div>
                          <p>We can’t help everyone, but everyone can help someone with MARiDONATE.</p>
                      </div>
                  </div>
              </div>
              @foreach ($latests as $latest)
              <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail campaign-box">
                    <!-- <embed src="files/{{$latest->image_name}}" type="application/pdf" width="100%" height="150px" /> -->
                    <!-- <img src="/uploads/{{$latest->image_name}}" class="img-thumbnail" alt="Cinque Terre"> -->
                    <div class="single-causes mb-30">
                      <a href="#"><img src="assets/img/causes/1.jpg" alt="" /></a>
                      <div class="causes-info">
                        <!-- <h3><a href="#">Children Case</a></h3> -->
                        <h3><a href="#" style="text-transform:capitalize;">{{$latest->title}}</a></h3>
                        <!-- <p>{{$latest->story}}</p> -->
                        <div class="row">
                          <div class="col-md-8 doller-target">
                            <h4>Fund Raised : <span>MYR {{$latest->fundRaised}}</span></h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 doller-target">
                            <h4>Fund Needed : <span>MYR {{$latest->goal_price}}</span></h4>
                          </div>
                        </div>
                        <!-- <div class="causes-meta">
                        <div class="doller-target f-left">
                        <h4>Fund Raised : <span>MYR {{$latest->fundRaised}}</span></h4>
                      </div>
                      <div class="doller-target f-right">
                      <h4>Fund Needed : <span>MYR {{$latest->goal_price}}</span></h4>
                    </div>
                  </div> -->
                  <form class="causes-meta" action="{{url('/campaign-details')}}" method="post">
                    <!-- <a class="button theme-bg" href="{{url('/campaign-details')}}">View Details
                    <input type="hidden" name="campaignID" value="{{$latest->app_camp_id}}">
                  </a> -->

                  <form class="" action="{{url('/campaign-details')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="campaignID" value="{{$latest->app_camp_id}}">
                    <button type="submit" name="button" class="theme-bg btn btn-primary pull-right">View Details</button>
                  </form>
                </form>

              </div>
            </div>
                  </div>
                </div
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-push-4 text-center">
          <a class="button theme-bg" href="/campaigns" style="background: #3074ae;">Load More</a>
        </div>
      </div>

        <!-- <div class="row">
          <div class="causes-area pt-120 pb-90">
              <div class="container">
                  <div class="section-title text-center mb-75">
                      <h2>Latest Causes</h2>
                      <div class="icon-img">
                          <img src="assets/img/icon-img/1.png" alt="">
                      </div>
                      <p>There are many variations of azer duskam of Lorem Ipsum available,</p>
                  </div>
                  <div class="row">
                      <div class="col-md-4 col-sm-4">
                          <div class="single-causes mb-30">
                              <a href="causes.html"><img src="assets/img/causes/1.jpg" alt="" /></a>
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
                                  <a class="button theme-bg" href="causes.html">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="single-causes mb-30">
                              <a href="causes.html"><img src="assets/img/causes/2.jpg" alt="" /></a>
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
                                  <a class="button theme-bg" href="causes.html">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="single-causes mb-30">
                              <a href="causes.html"><img src="assets/img/causes/3.jpg" alt="" /></a>
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
                                  <a class="button theme-bg" href="causes.html">Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div> -->
        <!-- services end -->
        <!-- causes start -->

        <!-- causes end -->
        <!-- video start -->
        <!-- <div class="video-area gray-bg ptb-120">
            <div class="container">
                <div class="video-part-1 pb-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="video-img">
                                <img src="assets/img/video/1.jpg" alt="">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=NV6RfexD_MQ">
                                    <img src="assets/img/icon-img/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="video-info video-border">
                                <h3>For The Angels</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                <a class="button theme-bg" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-part-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="video-info another-text">
                                <h3>Help Us A Little</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                <a class="button theme-bg" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="video-img">
                                <img src="assets/img/video/2.jpg" alt="">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=6Tc7LBx7XzE">
                                    <img src="assets/img/icon-img/2.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- video end -->
        <!-- funfact start -->
        <!-- <div class="funfact-area pt-120 pb-90" style="background-image:url(assets/img/bg/1.jpg)" data-overlay="5.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-30">
                            <h2 class="counter">192</h2>
                            <span>Donations</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-30">
                            <h2 class="counter">80</h2>
                            <span>Mission Done</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-30">
                            <h2 class="counter">252</h2>
                            <span>Volunteers</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="project-count text-center mb-30">
                            <h2 class="counter">17</h2>
                            <span>New Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- funfact end -->
        <!-- help area start -->
        <!-- <div class="help-area ptb-120 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-75">
                    <h2>How Can You Help</h2>
                    <div class="icon-img">
                        <img src="assets/img/icon-img/1.png" alt="">
                    </div>
                    <p>There are many variations of azer duskam of Lorem Ipsum available,</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="help-banner" data-overlay="15">
                            <img src="assets/img/banner/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="help-services">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center mb-65">
                                    <div class="single-service">
                                        <i class="icon-wallet"></i>
                                        <h3>Send Donation </h3>
                                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center mb-65">
                                    <div class="single-service">
                                        <i class="icon-profile-male"></i>
                                        <h3>Become Volenteer</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="single-service mrg-30">
                                        <i class="icon-gift"></i>
                                        <h3>Make A Gift</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="single-service">
                                        <i class="icon-camera"></i>
                                        <h3>Through Media</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- help area end -->
        <!-- blog area start -->
        <!-- <div class="blog-area pt-120 pb-90">
            <div class="container">
                <div class="section-title text-center mb-75">
                    <h2>Form The Blog</h2>
                    <div class="icon-img">
                        <img src="assets/img/icon-img/1.png" alt="">
                    </div>
                    <p>There are many variations of azer duskam of Lorem Ipsum available,</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="blog.html"><img src="assets/img/blog/1.jpg" alt=""></a>
                                <div class="blog-icon">
                                    <a class="blog-link" href="blog.html">
                                        <img src="assets/img/icon-img/4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <span>September 06, 2017</span>
                                <h3><a href="blog.html">Save The Child</a></h3>
                                <a href="blog.html">Read More
                                    <img class="b-blog" src="assets/img/icon-img/3.png" alt="">
                                    <img class="b-none" src="assets/img/icon-img/5.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="assets/img/blog/2.jpg" alt=""></a>
                                <div class="blog-icon">
                                    <a class="blog-link" href="blog.html">
                                        <img src="assets/img/icon-img/4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <span>September 06, 2017</span>
                                <h3><a href="blog.html">For New Genaration</a></h3>
                                <a href="blog.html">Read More
                                    <img class="b-blog" src="assets/img/icon-img/3.png" alt="">
                                    <img class="b-none" src="assets/img/icon-img/5.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="assets/img/blog/3.jpg" alt=""></a>
                                <div class="blog-icon">
                                    <a class="blog-link" href="blog.html">
                                        <img src="assets/img/icon-img/4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <span>September 06, 2017</span>
                                <h3><a href="blog.html">For New Hope</a></h3>
                                <a href="blog.html">Read More
                                    <img class="b-blog" src="assets/img/icon-img/3.png" alt="">
                                    <img class="b-none" src="assets/img/icon-img/5.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- blog area end -->
        <!-- footer area start -->

@endsection
