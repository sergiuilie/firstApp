@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>My Notes</h5>
                    <div class="col-xs-2">
                        <a class='btn btn-sm btn-primary pull-right' href='{{route('notes.create')}}'>New Note</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body myStuff">

                    <ul class="event-list">

                        @foreach($notes as $note)
                        <li>
                            <time datetime="2014-07-20">
                                <span class="day">{{ $note->created_at->day }}</span>
                                <span class="month">{{ $note->created_at->format('M') }} </span>
                                <span class="year">{{ $note->created_at->year }}</span>
                            </time>
                            <div class="info">
                                <p class="desc">{{ $note->body }}</p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="google-plus" style="width:33%;">
                                        <a onclick="deleteUser('{{$note->id}}' , '{{$note->body}}')">
                                            <span class="fa fa-times"></span>
                                        </a>
                                    </li>
                                    <li class="google-plus" style="width:33%;">
                                        <a href = "{{route('notes.edit', $note->id)}}">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteUser(id, name) {

    alertify.confirm("Delete user", "Are you sure you want to delete " + name + "?",
            function () {
            $.ajax({
            url: "{{route('notes.index')}}/" + id,
                    type: 'DELETE',
                    data: {_token: '{{csrf_token()}}'},
                    success: function (result) {
                            window.location.reload();
                    }
            });
            },
            function () {
            alertify.error('Cancel');
            });
    }
</script>

@endsection
