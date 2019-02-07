@extends('registration.layout')
@section('title')
Admin | Register
@endsection
@section('content')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('https://demos.creative-tim.com/material-dashboard-pro/assets/img/login.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="card card-login">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Registration</h4>
                </div>
                <div class="card-body ">
                  @if($errors)
                    <ul>
                        @foreach($errors->all() as $error)
                          <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                  @endif  
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" name="name" value="" class="form-control" placeholder="Name...">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" name="email" class="form-control" placeholder="Email...">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="password" class="form-control" placeholder="Password...">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password...">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection