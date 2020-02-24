@extends('admin.layouts.app')

@section('content')

<section class="content-header">
  <h1>
    Dashboard
    <small>Edit Campaign</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"> <i class="fas fa-home"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <!-- <form class="form-horizontal" action="index.html" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
  </form> -->

  <!-- <div class="panel-heading">Start a Campaign</div> -->
  <div class="panel-body">

    @foreach($campaigns as $camp)
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/backend/update-campaign') }}" enctype="multipart/form-data">
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
        {!! csrf_field() !!}

          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title" class="col-md-4 control-label">Funding Purpose</label>

              <div class="col-md-6">
                  <input id="title" type="text" class="form-control" name="title" value="{{$camp->title}}">

                  @if ($errors->has('title'))
                      <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('goal_price') ? ' has-error' : '' }}">
              <label for="goal_price" class="col-md-4 control-label">Funding Needed</label>

              <div class="col-md-6">
                  <input id="goal_price" type="number" class="form-control" name="goal_price" value="{{ $camp->goal_price }}">

                  @if ($errors->has('goal_price'))
                      <span class="help-block">
                          <strong>{{ $errors->first('goal_price') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <!-- <div class="form-group{{ $errors->has('image_name') ? ' has-error' : '' }}">
              <label for="image_name" class="col-md-4 control-label">Image</label>

              <div class="col-md-6">
                  <input id="image_name" type="file" name="image_name" value="{{ old('image_name') }}" accept="image/*">
                  <p class="help-block">668x445 pixels</p>

                  @if ($errors->has('image_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('image_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div> -->

          <div class="form-group{{ $errors->has('story') ? ' has-error' : '' }}">
              <label for="story" class="col-md-4 control-label">Description</label>

              <div class="col-md-6">
                  <textarea id="story" name="story" class="form-control" cols="30" rows="10">{{ $camp->story }}</textarea>

                  @if ($errors->has('story'))
                      <span class="help-block">
                          <strong>{{ $errors->first('story') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
              <label for="deadline" class="col-md-4 control-label">Deadline</label>

              <div class="col-md-6">
                  <input id="deadline" type="text" class="form-control datepicker" name="deadline" value="{{ $camp->deadline }}">

                  @if ($errors->has('deadline'))
                      <span class="help-block">
                          <strong>{{ $errors->first('deadline') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <input type="hidden" name="campaignId" value="{{$camp->id}}">
          <input type="hidden" name="userId" value="{{$camp->user_id}}">

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-user"></i> Start Campaign
                  </button>
              </div>
          </div>
      </form>
      @endforeach
  </div>
</section>


@endsection
