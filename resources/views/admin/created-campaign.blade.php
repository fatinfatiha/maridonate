@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Created Campaign</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"> <i class="fas fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
  <div class="container table-admin">
    <table class="table table-bordered user-table">
      <tr id="user-table-top">
         <th>
            <h4><b>Funding Purpose</b></h4>
         </th>
         <th>
            <h4><b>Funding Needed</b></h3>
         </th>
         <th>
            <h4><b>Description</b></h3>
         </th>
         <th>
            <h4><b>Deadline</b></h3>
         </th>
         <th>
            <h4><b>Created By</b></h3>
         </th>
         <th>
            <h4><b>Datetime</b></h3>
         </th>
         <th>
            <h4><b>Approve</b></h3>
         </th>
         <th>
            <h4><b>Deny</b></h3>
         </th>
      </tr>
      <tr>
        @foreach ($campaignsData as $campaignData)
         <th>
            <h5>{{$campaignData->title}}</h5>
         </th>
         <th>
            <h5>{{$campaignData->goal_price}}</h5>
         </th>
         <th>
            <h5>{{$campaignData->story}}</h5>
         </th>
         <th>
            <h5>{{$campaignData->deadline}}</h5>
         </th>
         <th>
            <h5>{{$campaignData->first_name}} {{$campaignData->last_name}}</h5>
         </th>
         <th>
            <h5>{{$campaignData->created_at}}</h5>
         </th>
         <!-- <th><button><i class="fa fa-edit"></i></button></th> -->
         <th>
           <form class="" action="{{url('/backend/approve-campaign')}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <button type="submit" name="button" class="btn btn-success"><input type="hidden" name="app_campaign" value="{{$campaignData->id}}"><i class="fas fa-vote-yea"></i></button>
           </form>
         </th>
         <th>
           <form class="" action="{{url('/backend/delete-campaign')}}" method="post">
               <!-- {!! csrf_field() !!} -->
               <input type="hidden" name="_token" value="{{ csrf_token() }}">

               <button type="submit" name="button" class="btn btn-danger"><input type="hidden" name="del_campaign" value="{{$campaignData->id}}"><i class="fas fa-trash-alt"></i></button>

           </form>
         </th>
      </tr>
      @endforeach
    </table>
  </div>
</section>
@endsection
