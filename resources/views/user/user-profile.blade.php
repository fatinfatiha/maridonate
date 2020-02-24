@extends('layouts.master')

@section('content')

<!-- <div class="main-content">
<div class="container">
<h3 class="site-title">My Profile</h3>
<div class="row">
<div class="col-md-9">
<div class="row">
<div class="panel">
<div class=" panel-body ">

<div class="col-md-5">
<img class="img-responsive" src="http://www.pvhc.net/img240/uyttxprhsqycyximpzjb.png" style="width:30%;">
<i class="fa fa-wrench"> Edit</i>
<div class=" clearfix">
<h3>Abhinav Bhattacharya </h3>
<div class="profile-ratings">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
<h4>You are a Free Member</h4>
<button type="button" class="btn btn-success btn-md pull-center">Upgrade now</button>
<hr>



</div>
</div>
<div class="col-md-7">
<div class="profile-block">
<ul class="list-group">
<li class="list-group-item">Vehicles Lifted <span class="badge">12</span></li>
<li class="list-group-item">WishList <span class="badge">5</span></li>
<li class="list-group-item">Notifications <span class="badge">3</span></li>
<li class="list-group-item">Notifications <span class="badge">3</span></li>

<li class="list-group-item">Notifications <span class="badge">3</span></li>

<li class="list-group-item">Notifications <span class="badge">3</span></li>

</ul>
</div>
</div>


</div>
</div>
</div>
<div class="row">
<div class="panel">
<div class=" panel-body ">
<div class="col-md-12">

<ul class="list-inline">
<li><h5><strong>Interested in: <a href="#"><i class="fa fa-wrench"> Edit</i></a> </strong> </h5> </li>
<li>Maruti, Suzuki, Nissan, Skoda, BMW, Mercedez, Skoda, Honda, Toyota, Hyundai</li>
</ul>
<ul class="list-inline">
<li><h5><strong>Preferred Buying Location: <a href="#"><i class="fa fa-wrench"> Edit</i></a></strong></h5></li>
<li>New Delhi, Jaipur, Haryana, UP, Bihar</li>
</ul>
<ul class="list-inline">
<li><h5><strong>My Bidding Limit:</strong></h5></li>
<li> Rs. 2,00000/- </li>
</ul>
<hr >


</div>
</div>


</div>
</div>
</div>


</div>

</div>
</div> -->

<div class="container user-profile-section">

  <div class="view-account">
    <section class="module">
      <div class="module-inner">
        <!-- <div class="side-bar">
          @if($users)
          @foreach($users as $user)
          <div class="user-info">
            <img class="img-profile img-circle img-responsive center-block" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
            <ul class="meta list list-unstyled">
              <li class="name">{{$user->first_name}} {{$user->last_name}}
                <label class="label label-info">UX Designer</label>
              </li>
              <li class="email"><a href="#">{{$user->email}}</a></li>
              <li class="activity">Last logged in: Today at 2:18pm</li>
            </ul>
          </div>
          @endforeach
          @endif
          <nav class="side-menu">
            <ul class="nav">
              <li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
              <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
              <li class="active"><a href="#"><span class="fa fa-credit-card"></span> Billing</a></li>
              <li><a href="#"><span class="fa fa-envelope"></span> Messages</a></li>

              <li><a href="user-drive.html"><span class="fa fa-th"></span> Drive</a></li>
              <li><a href="#"><span class="fa fa-clock-o"></span> Reminders</a></li>
            </ul>
          </nav>
        </div> -->


        <div class="content-panel">
          <div class="content-header-wrapper">
            <h2 class="title">{{$user->first_name}} {{$user->last_name}}</h2>
            <div class="actions">
              <a href="{{url('/edit-profile')}}" class="btn btn-success"><i class="fas fa-user-edit"></i> Edit Profile</a>
              <!-- <a href="#myModal" class="trigger-btn btn btn-danger" data-toggle="modal"><i class="fas fa-user-slash"></i> Delete Account</a> -->
              <button class="btn btn-danger" id="btn-confirm"><i class="fas fa-user-slash"></i> Delete Account</button>
              <!-- <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a> -->

              <!-- <a href="btn btn-success"><i class="fas fa-user-edit"></i> Update Profile</a> -->
            </div>
          </div>

          <!-- <div class="content-utilities">
            <div class="page-nav">
              <span class="indicator">View:</span>
              <div class="btn-group" role="group">
                <button class="active btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Grid View" id="drive-grid-toggle"><i class="fa fa-th-large"></i></button>
                <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="List View" id="drive-list-toggle"><i class="fa fa-list-ul"></i></button>
              </div>
            </div>
            <div class="actions">
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">All Items <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                  <li><a href="#"><i class="fa fa-file-image-o"></i> Images</a></li>
                  <li><a href="#"><i class="fa fa-file-video-o"></i> Media Files</a></li>
                  <li><a href="#"><i class="fa fa-folder"></i> Folders</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><i class="fa fa-filter"></i> Sorting <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Newest first</a></li>
                  <li><a href="#">Oldest first</a></li>
                </ul>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>

                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
              </div>
            </div>
          </div> -->
          @if($campaigns)
          <?php
            $numOfCols = 4;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
           ?>
            <div class="drive-wrapper">
              @foreach($campaigns as $campaign)
              <div class="row">
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                  <div class="drive-grid-view">
                    <div class="grid-items-wrapper">
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">{{$campaign->title}}</a></div>
                          <!-- <img src="/uploads/{{$campaign->image_name}}" alt=""> -->
                          <img src="/images/logo2.png" alt="">
                          <!-- <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                          </div> -->
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <!-- <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li> -->
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" style="color: #c93a36;"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Stock Image DC3214.JPG</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Deck Lorem Ipsum.ppt</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-powerpoint-o text-warning"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Project Tasks.csv</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-excel-o text-success"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Project Brief.pdf</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-pdf-o text-danger"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Image DS1341.JPG</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Image DS3214.JPG</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">UX Resource</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-folder text-primary"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Prototypes</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-folder text-primary"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Sketch-source-files.zip</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-zip-o text-primary"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Quisque.doc</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-word-o text-info"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Aenean imperdiet.doc</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-word-o text-info"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">demo.html</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><i class="fa fa-file-code-o text-primary"></i></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="drive-item module text-center">
                        <div class="drive-item-inner module-inner">
                          <div class="drive-item-title"><a href="#">Image DS2314.JPG</a></div>
                          <div class="drive-item-thumb">
                            <a href="#"><img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                          </div>
                        </div>
                        <div class="drive-item-footer module-footer">
                          <ul class="utilities list-inline">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><i class="fa fa-download"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
                          </ul>
                        </div>
                      </div> -->
                    </div>
                  </div>

                  </div>


                  <?php
                      $rowCount++;
                      if($rowCount % $numOfCols == 0) echo '<div class="row">';
                  ?>
                  @endforeach
              </div>
                </div>
              </div>
          @endif
          <!-- Comfirmation Modal -->


          <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
            <div class="modal-dialog modal-confirm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Confirmation</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete your account? This action cannot be undone and you will be unable to recover any data.</p>
                </div>
                <div class="modal-footer">
                  <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>
                  <a href="{{url('/delete-profile')}}" class="btn btn-danger">Yes, delete it!</a>
                </div>
              </div>
            </div>
          </div>

          <div class="alert" role="alert" id="result"></div>

          <!-- <div class="drive-wrapper drive-list-view">
            <div class="table-responsive drive-items-table-wrapper">
              <table class="table">
                <thead>
                  <tr>
                    <th class="type"></th>
                    <th class="name truncate">Name</th>
                    <th class="date">Uploaded</th>
                    <th class="size">Size</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="type"><i class="fa fa-file-text-o text-primary"></i></td>
                    <td class="name truncate"><a href="#">Meeting Notes.txt</a></td>
                    <td class="date">Sep 23, 2015</td>
                    <td class="size">18 KB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                    <td class="name truncate"><a href="#">Stock Image DC3214.JPG</a></td>
                    <td class="date">Sep 21, 2015</td>
                    <td class="size">235 MB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-powerpoint-o text-warning"></i></td>
                    <td class="name truncate"><a href="#">Deck Lorem Ipsum.ppt</a></td>
                    <td class="date">Sep 20, 2015</td>
                    <td class="size">136 MB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-excel-o text-success"></i></td>
                    <td class="name truncate"><a href="#">Project Tasks.csv</a></td>
                    <td class="date">Aug 16, 2015</td>
                    <td class="size">32 KB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-pdf-o text-warning"></i></td>
                    <td class="name truncate"><a href="#">Project Brief.pdf</a></td>
                    <td class="date">Aug 15, 2015</td>
                    <td class="size">73 MB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                    <td class="name truncate"><a href="#">Image DS1341.JPG</a></td>
                    <td class="date">Aug 15, 2015</td>
                    <td class="size">171 MB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-image-o text-primary"></i></td>
                    <td class="name truncate"><a href="#">Image DS3214.JPG</a></td>
                    <td class="date">Aug 15, 2015</td>
                    <td class="size">171 MB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-folder text-primary"></i></td>
                    <td class="name truncate"><a href="#">UX Resource</a></td>
                    <td class="date">Feb 07, 2015</td>
                    <td class="size">--</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-folder text-primary"></i></td>
                    <td class="name truncate"><a href="#">Prototypes</a></td>
                    <td class="date">Jan 03, 2015</td>
                    <td class="size">--</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-word-o text-info"></i></td>
                    <td class="name truncate"><a href="#">Quisque.doc</a></td>
                    <td class="date">Oct 21, 2014</td>
                    <td class="size">27 KB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-word-o text-info"></i></td>
                    <td class="name truncate"><a href="#">Aenean imperdiet.doc</a></td>
                    <td class="date">Oct 16, 2014</td>
                    <td class="size">23 KB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-code-o text-primary"></i></td>
                    <td class="name truncate"><a href="#">demo.html</a></td>
                    <td class="date">Aug 23, 2014</td>
                    <td class="size">10 KB</td>
                  </tr>
                  <tr>
                    <td class="type"><i class="fa fa-file-image-o text-success"></i></td>
                    <td class="name truncate"><a href="#">Image DS2314.JPG</a></td>
                    <td class="date">Aug 06, 2014</td>
                    <td class="size">325 MB</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div> -->

        </div>
      </div>
    </section>
  </div>
</div>



<script type="text/javascript">
$(function(){
  $("[data-toggle='tooltip']").tooltip();
})

// Comfirmation Modal
var modalConfirm = function(callback){

  $("#btn-confirm").on("click", function(){
    $("#mi-modal").modal('show');
  });

  $("#modal-btn-si").on("click", function(){
    callback(true);
    $("#mi-modal").modal('hide');
  });

  $("#modal-btn-no").on("click", function(){
    callback(false);
    $("#mi-modal").modal('hide');
  });
};

modalConfirm(function(confirm){
  if(confirm){
    //Acciones si el usuario confirma
    $("#result").html("Confirm");
  }else{
    //Acciones si el usuario no confirma
    $("#result").html("Cancel");
  }
});
</script>
@endsection
