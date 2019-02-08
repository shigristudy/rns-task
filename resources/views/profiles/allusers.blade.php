@extends('layout.main')
@section('title')
User Profile
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($users as $user)
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
                        <a href="#pablo" class="btn btn-primary btn-round">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection