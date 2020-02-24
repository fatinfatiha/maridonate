@extends('layouts.master')

@section('content')

<form method="POST" action="apply" class="form-horizontal custm-form" role="form">
{!! csrf_field() !!}
    <div class="modal-header">
    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>-->
        <h4 class="modal-title">Apply Online</h4>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label class="control-label col-md-3">Name:</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">E-mail:</label>
            <div class="col-md-8">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" name="resume">Attach Resume:</label>
            <div class="col-md-8">
                <input  type="file" id="resume" placeholder="Resume" name="resume" class=""/>
                <span class="required" id='spnFileError'></span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-xs-5">
            <p style="margin:0;text-align:left;color: green;display:none;" id="successMsg">Submitted Successfully!</p>
        </div>
        <button type="submit" id="btnUpload" class="custm-btn btn-primary" onclick="uploadFile();">Submit</button>
        <button type="button" class="custm-btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>

@endsection
