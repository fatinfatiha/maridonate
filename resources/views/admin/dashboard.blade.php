@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
      @endif
      <div class="container table-admin">
        <table class="table table-bordered user-table">
          <tr id="user-table-top" style="border-bottom: 2px solid;">
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
                <h4><b>Email</b></h3>
             </th>
             <th>
                <h4><b>Datetime</b></h3>
             </th>
             <th>
                <h4><b>Edit</b></h3>
             </th>
             <th>
                <h4><b>Accept</b></h3>
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
                <h5>{{$campaignData->email}}</h5>
             </th>
             <th>
                <h5>{{$campaignData->created_at}}</h5>
             </th>
             <!-- <th><button><i class="fa fa-edit"></i></button></th> -->
             <th>
               <form class="" action="{{url('/backend/edit-campaign')}}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <button type="submit" name="button" onclick="return confirm('Are you sure?')" class="btn btn-primary"><input type="hidden" name="edit_campaign" value="{{$campaignData->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
               </form>
             </th>
             <th style="text-align:center;">
               <form class="" action="{{url('/backend/approve-campaign')}}" method="post">
                   <!-- {!! csrf_field() !!} -->
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                   <button type="submit" name="button" onclick="return confirm('Are you sure?')" class="btn btn-success"><input type="hidden" name="app_campaign" value="{{$campaignData->id}}"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>

               </form>
             </th>
             <th>
               <form class="" action="{{url('/backend/delete-campaign')}}" method="post">
                   <!-- {!! csrf_field() !!} -->
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                   <button type="submit" name="button" onclick="return confirm('Are you sure?')" class="btn btn-danger"><input type="hidden" name="del_campaign" value="{{$campaignData->id}}"><i class="fa fa-ban" aria-hidden="true"></i></button>

               </form>
             </th>
          </tr>
          @endforeach
        </table>
      </div>


    </section>
    <!-- /.content -->
@endsection
