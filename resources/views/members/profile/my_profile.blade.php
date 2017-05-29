@extends('layouts.members')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->member->first_name}}</div>

                    <div class="panel-body">
                        <div class="col-md-9">
                            <form class="form-horizontal" role="form" style="margin-left: 20px;margin-top: 20px">
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="first-name">First Name:</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="first_name_value">{{$user->member->first_name}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="last-name"> Middle Name:</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="last_name_value">{{$user->member->middle_name}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="last-name"> Last Name:</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="last_name_value">{{$user->member->last_name}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="e-mail"> Email Address:</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="e-mail_value">{{$user->email}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="man-number"> Member id:</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="man-number_value">{{$user->member->member_id}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="status_field">Status</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="status_field_label">{{$user->member->status->status_description}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="residential-address"> Position</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="residential_address_value">{{$user->member->position->position_description}}</label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-xs-4" for="contract-expiry-date">Year</label>
                                    <div class="col-sm-6 col-md-6 col-xs-5">
                                        <label class="text-primary" for="contract_expiry_date_value">{{\Carbon\Carbon::parse($user->member->year)->toFormattedDateString()}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-8 col-md-9 col-xs-6">
                                        <a href="{{url('/members/my_profile/edit')}}" class="btn btn-info btn-sm" role="button">Edit profile</a>
                                    </div>
                                </div>

                            </form>
                            <!-- /.form -->
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                            <div class="profile_img">

                                <!-- end of image cropping -->
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <div class="avatar-view form-group" title="Add new profile picture">
                                        <a href="#" class="btn btn-link" role="button" data-toggle="modal"
                                           data-target="#avatar-modal" onclick="" id=""><img class="img-responsive img-circle" src="{{URL::asset('../img/profile.png')}}" alt="Avatar">
                                        </a>
                                    </div>

                                    <div id="demo" class="collapse">

                                    </div>

                                    <!-- Cropping modal -->
                                    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                                    <div class="modal-header">
                                                        <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                        <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="avatar-body">

                                                            <!-- Upload image and data -->
                                                            <div class="avatar-upload">
                                                                <input class="avatar-src" name="avatar_src" type="hidden">
                                                                <input class="avatar-data" name="avatar_data" type="hidden">
                                                                <label for="avatarInput">Local upload</label>
                                                                <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                                            </div>

                                                            <!-- Crop and preview -->
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <div class="avatar-wrapper"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="avatar-preview preview-md"></div>
                                                                </div>
                                                            </div>

                                                            <div class="row avatar-btns">
                                                                <div class="col-md-9">
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                                                        <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="modal-footer">
                                                                      <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                                    </div> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->

                                    <!-- Loading state -->
                                    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                </div>
                                <!-- end of image cropping -->

                            </div>

                        </div>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->



@endsection
