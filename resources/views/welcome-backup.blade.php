@extends('layouts.master')
@include('layouts.navbar2')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
@section('content')

<header>
  <div class="container">
    <h1>-MARiDONATE-</h1>
    <!-- <img src="/images/logo2.png" alt=""> -->
    <h3>Let’s help the needy.</h3>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ url('/register') }}" class="btn btn-primary btn-outline-dark btn-lg active" role="button" aria-pressed="true">Register</a>
          <a href="{{ url('/login') }}" class="btn btn-primary btn-outline-dark btn-lg active" role="button" aria-pressed="true">Login</a>

        </div>
      </div>
    </div>
  </div><!-- /.container -->
</header>
<section class="welcome">
  <div class="container">

  </div><!-- /.container -->
</section>

@endsection
