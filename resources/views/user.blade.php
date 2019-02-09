@extends('layout.main')
@section('title')
User Profile
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <form id="myform" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group">
                                        <label class="bmd-label-floating">Designation</label>
                                        <input type="text" name="designation" class="form-control" value="{{$user->designation}}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Few Lines About you</label>
                                            <textarea name="about" class="form-control" rows="5">{{$user->about}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="file" name="image">
                            <button type="submit" id="btnSendData" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset('img/profiles/'.$user->avatar) }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{$user->designation}}</h6>
                        <h4 class="card-title">{{$user->name}}</h4>
                        <p class="card-description">
                            {{$user->about}}
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">View</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection

@section('custom-scripts')
<script type="text/javascript">
    $(document).on('click', '#btnSendData', function (event) {
        event.preventDefault();
        var form = $('#myform')[0];
        var formData = new FormData(form);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
            }
        });
        $.ajax({
            url: "{{route('editprofile')}}",
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                if(data.success==1){   
                    $.notify({
                      icon: "add_alert",
                      message: "Profile Updated Successfully!..."

                    }, {
                      type: 'success',
                      timer: 3000,
                      placement: {
                        from: 'top',
                        align: 'right'
                      }
                    });
                }
            },
            error: function () {
                $.notify({
                  icon: "add_alert",
                  message: "Something Wrong Please Check Information."

                }, {
                  type: 'danger',
                  timer: 3000,
                  placement: {
                    from: 'top',
                    align: 'right'
                  }
                });
            }
        });
   });
</script>

@endsection