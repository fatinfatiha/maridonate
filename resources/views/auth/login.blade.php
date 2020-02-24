@extends('admin.layouts.auth')

@section('content')

<div class="">
  <div class="">
    <div class="login-background">
      <p class="login-box-msg">User</p>
      <form action="{{ url('/login') }}" method="post">
          {!! csrf_field() !!}

          <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
          <div class="row">
              <div class="col-xs-8">
                  <!-- <div class="checkbox icheck">
                      <label>
                          <input type="checkbox" name="remember"> Remember Me
                      </label>
                  </div> -->
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
          </div>
      </form>

      <!-- <a href="{{ url('/password/reset') }}">I forgot my password</a><br> -->
      <!-- <a href="{{ url('/register') }}">Register a new membership</a> -->
    </div>
  </div>
</div>
</div>



@endsection
