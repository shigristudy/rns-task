@extends('layout.main')
@section('title')
User | {{$user->name}}
@endsection
<style type="text/css">
    .replyButton:hover{
        cursor: pointer;
    }

</style>
@section('content')
    <div class="container" style="width: 80%">
        <div class="row">
           <div class="col-md-12">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ asset('img/profiles/'.$user->avatar) }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">{{$user->name}}</h4>
                        <p class="card-description">
                            {{$user->about}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            @forelse($comments as $comment)
            <div class="card">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group text-center">
                         <img style="width: 50px;height: 50px; border-radius: 50%;" class="img" src="{{ asset('img/profiles/'.$comment->user->avatar) }}" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <div class="form-group">
                            <p>{{$comment->comment_body}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="form-group">
                            <i class="material-icons replyButton" data-id="{{$comment->id}}">reply</i>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($comment->replies as $row)
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-2">
                    <div class="form-group text-center">
                         <img style="width: 50px;height: 50px; border-radius: 50%;" class="img" src="{{ asset('img/profiles/'.$row->user->avatar) }}" />
                    </div>
                </div>
                <div class="col-md-8 ">
                    <div class="form-group" style="margin-bottom: 5%; margin-right:5%;background-color: #eeeeee !important; padding: 10px;">
                        <p style="margin: 0px !important;">{{$row->replybody}}</p>
                    </div>
                </div>
            </div>
           
            @endforeach
            
            <form id="replyFormdata_{{$comment->id}}">
                @csrf
                <input type="hidden" name="comment_id" value="{{$comment->id}}">
                <div class="row replybox_{{$comment->id}}" style="display: none;">
                    <div class="col-md-2">
                        <div class="form-group text-center">
                             <img style="width: 50px;height: 50px; border-radius: 50%;" class="img" src="{{ asset('img/profiles/'.auth()->user()->avatar) }}" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="bmd-label-floating">Your Reply Here....</label>
                                <textarea name="replybody" class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" onclick="replyformdata({{$comment->id}})">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            </div>
            @empty
                <p>No Comments</p>
            @endforelse

        </div>
        <form id="commentForm">
            @csrf
            <input type="hidden" name="profile_id" value="{{$user->id}}">
            <div class="card">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group text-center">
                             <img style="width: 50px;height: 50px; border-radius: 50%;" class="img" src="{{ asset('img/profiles/'.auth()->user()->avatar) }}" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="bmd-label-floating">Your Comment Here....</label>
                                <textarea name="comment" class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('custom-scripts')
<script type="text/javascript">

    $('.replyButton').click(function(){
        var id = $(this).attr('data-id');
        $('.replybox_'+id).fadeIn();
    });

    $(document).on('submit','#commentForm',function(event){
        event.preventDefault();
        var form = $('#commentForm')[0];
        var formData = new FormData(form);
        $.ajax({
            url: "{{route('submitComment')}}",
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                if(data.success==1){   
                    $.notify({
                      icon: "add_alert",
                      message: "Comment Added Successfully Refresh to see :P"

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
            }
        });
    });

    function replyformdata(comment_id){
        event.preventDefault();
        var form = $('#replyFormdata_'+comment_id)[0];
        var formData = new FormData(form);
        $.ajax({
            url: "{{route('replysubmitComment')}}",
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                if(data.success==1){   
                    $.notify({
                      icon: "add_alert",
                      message: "Reply Added Successfully Refresh to see :P"

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
            }
        });
    }

    
</script>
@endsection