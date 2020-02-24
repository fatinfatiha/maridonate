@extends('layouts.master')

@section('content')

<div class="container donate-section">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif
      @foreach ($campaigns as $campaign)
      <form role="form" action="{{url('/donation')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2 class="text-center" style="text-transform:capitalize;">Donation for : {{$campaign->title}}</h2>
        <!-- <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">Campaign</label>
          <div class="input-group">
            <div class="input-group-addon">Campaign</div>
            <input type="text" class="form-control" name="campaign" value="{{$campaign->title}}">
          </div>
        </div> -->
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">Amount (in Malaysia Ringgit)</label>
          <div class="input-group">
            <div class="input-group-addon">MYR</div>
            <input type="text" class="form-control" name="amount" placeholder="Amount" required>
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
            <input type="date" class="form-control DateField" name="transDate" placeholder="Transaction Date" required>
          </div>
        </div>
        <div class="form-group">
            <label class="sr-only" name="resume">Attach Receipt</label>
            <div class="input-group">
              <div class="input-group-addon">Attach Receipt (PDF Only)</div>
                <input  type="file" id="resume" placeholder="Attach Receipt" name="attachReceipt" class="form-control" accept="pdf/*"/ required>
                <span class="required" id='spnFileError'></span>
                
            </div>
        </div>
        @foreach ($campaigns as $campaign)
        <input type="hidden" name="campaignId" value="{{$campaign->app_camp_id}}">
        @endforeach
        <!-- <button type="submit" class="btn btn-success">Transfer cash</button> -->
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      @endforeach
    </div>
  </div>
</div>

@endsection
