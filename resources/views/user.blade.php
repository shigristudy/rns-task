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
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                            <textarea name="about" class="form-control" rows="5"></textarea>
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
                            <img class="img" src="{{ asset('img/faces/marc.jpg') }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">{{$user->name}}</h4>
                        <p class="card-description">
                            {{$user->email}}
                        </p>
                        
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
                console.log(data);
            },
            error: function () {

            }
        });
   });
</script>

@endsection