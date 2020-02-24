
<nav class="navbar navbar-bottom navbar-default navbar-static-top navbar-top nav-height">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            @if (Auth::guest())
            <a class="navbar-brand navbar-font-brand nav-lineheight-1" href="{{ url('/') }}">
                MARiDONATE
            </a>
            @else
            <a class="navbar-brand navbar-font-brand nav-lineheight-3" href="{{ url('/') }}">
                MARiDONATE
            </a> &nbsp
              <a href="{{ url('/start-a-campaign') }}" class="navbar-font navbar-lineheight-5">Start a campaign</a> &nbsp
              <a href="{{ url('/campaigns') }}" class="navbar-font navbar-lineheight-5">Campaigns</a>

            @endif
        </div>

        <div class="collapse navbar-collapse nav-lineheight-2" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <!-- {!! Form::open(['url' => 'search', 'class' => 'navbar-form navbar-left', 'method' => 'GET']) !!}
                {!! Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
            {!! Form::close() !!} -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <!-- <li><a href="{{ url('/start-a-campaign') }}" class="navbar-font nav-lineheight-4">Start a campaign</a></li>
                    <li><a href="{{ url('/login') }}" class="navbar-font nav-lineheight-4">Sign In</a></li> -->
                    <li><a href="{{ url('/start-a-campaign') }}" class="navbar-font">Start a campaign</a></li>
                    <li><a href="{{ url('/login') }}" class="navbar-font"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                @else

                <div class="dropdown nav-lineheight-3">


                  <a href="#" role="button" class="dropdown-toggle navbar-font" data-toggle="dropdown">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-font" role="menu">
                      <!-- <li><a href="{{ url('/start-a-campaign') }}" class="navbar-font">Start a campaign</a></li>
                      <li><a href="{{ url('/logout') }}" class=" navbar-font"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li> -->
                      <!-- <li><a href="{{ url('/start-a-campaign') }}" class="navbar-font">Start a campaign</a></li> -->
                      <li><a href="{{ url('/user-profile') }}" class="navbar-font"><i class="fas fa-user"></i> Profile</a></li>
                      <li><a href="{{ url('/logout') }}" class="navbar-font"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
                </div>

                <!-- <div class="dropdown">
                    <a href="{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}" data-toggle="dropdown" class="dropdown-toggle navbar-font">Start Campaign  <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/start-a-campaign') }}" class="navbar-font">>Action</a></li>
                        <li><a href="{{ url('/start-a-campaign') }}"><i class="fa fa-btn fa-sign-out navbar-font"></i>Logout</a></li>
                    </ul>
                </div> -->

                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle navbar-font" data-toggle="dropdown" role="button"  >
                            {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/start-a-campaign') }}" class="navbar-font">Start a campaign</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out navbar-font"></i>Logout</a></li>
                        </ul>
                    </li> -->
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- <div class="container">
  <div class="navbar navbar-static">
      <div class="navbar-inner">

          <ul class="nav nav-pills">
         <li class="active"><a href="#">Home</a></li>
         <li><a href="#">Profile</a></li>
         <li class="dropdown">
             <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
             <ul class="dropdown-menu">
                 <li><a href="#">Inbox</a></li>
                 <li><a href="#">Drafts</a></li>
                 <li><a href="#">Sent Items</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Trash</a></li>
             </ul>
         </li>
         <li class="dropdown pull-right">
             <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
             <ul class="dropdown-menu">
                 <li><a href="#">Action</a></li>
                 <li><a href="#">Another action</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Settings</a></li>
             </ul>
         </li>
     </ul>
      </div>
  </div>
</div> -->

<!-- <header class="header-area">
            <div class="header-top black-light-bg ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="header-info">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> <a href="#">charityfund@gmail.com</a></li>
                                    <li><i class="fa fa-phone"></i> +8801973833508</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 hidden-xs">
                            <div class="search-menu f-right">
                                <div class="search-bar-button">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <div class="widget_searchform_content">
                                        <form action="#">
                                            <input type="text" placeholder="Search" name="s" value="">
                                            <button class="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu f-right">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home <i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="causes.html">CAUSE  </a></li>
                                        <li><a href="event.html">EVENTS </a></li>
                                        <li><a href="#">PAGES  <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="causes.html">causes page</a></li>
                                                <li><a href="event.html">event page</a></li>
                                                <li><a href="gallery.html">gallery page</a></li>
                                                <li><a href="volunteer.html">volunteer </a></li>
                                                <li><a href="contact.html">contact us</a></li>
                                                <li><a href="event-details.html">event details</a></li>
                                                <li><a href="causes-details.html">causes details</a></li>
                                                <li><a href="become-volunteer.html">become volunteer</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">BLOG <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="blog.html">blog page</a></li>
                                                <li><a href="blog-details.html">blog details </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">CONTACT </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area visible-xs hidden-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul>
                                            <li><a href="index.html">HOME</a>
                                                <ul class="menu-overflow">
                                                    <li><a href="index.html">home version 1</a></li>
                                                    <li><a href="index-2.html">home version 2</a></li>
                                                    <li><a href="index-3.html">home version 3</a></li>
                                                    <li><a href="index-4.html">home version 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="causes.html">cause</a></li>
                                            <li><a href="event.html">events</a></li>
                                            <li><a href="#">pages</a>
                                                <ul class="menu-overflow">
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="causes.html">causes page</a></li>
                                                    <li><a href="event.html">event page</a></li>
                                                    <li><a href="gallery.html">gallery page</a></li>
                                                    <li><a href="volunteer.html">volunteer </a></li>
                                                    <li><a href="contact.html">contact us</a></li>
                                                    <li><a href="event-details.html">event details</a></li>
                                                    <li><a href="causes-details.html">causes details</a></li>
                                                    <li><a href="become-volunteer.html">become volunteer</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">BLOG</a>
                                                <ul class="menu-overflow">
                                                    <li><a href="blog.html">blog page</a></li>
                                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                    <li><a href="blog-details.html">blog details </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">CONTACT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</header> -->
		<!-- header end -->
