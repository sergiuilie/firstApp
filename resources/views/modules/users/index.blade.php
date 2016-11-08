@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!--<div class='col-xs-2'>Users</div>-->
                    <div class='col-xs-10'>
                        {!! Form::open(['route' => ['users.index'], 'method' => 'GET', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Users</label>
                            <div class="col-lg-10">
                                {!! Form::text('search', request('search'), ['class' => 'form-control input-sm' , 'placeholder' => 'Search user'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-xs-2">
                        <a class='btn btn-sm btn-primary pull-right' href='{{route('users.create')}}'>New User</a>
                    </div>
                    <div class='clearfix'></div>
                </div>
                <div class="panel-body myStuff">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('users.show', $user->id)}}" class="btn btn-xs btn-info">View</a>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-xs btn-warning">Edit</a>
                                    <button onclick="deleteUser({{$user->id}}, '{{$user->name}}')" class="btn btn-xs btn-danger">Delete</button>
                                    @if(!in_array($user->id, array_pluck(\Auth::user()->contacts,'reference_user_id')))
                                    <button onclick="addUser({{$user->id}}, '{{$user->name}}')" class="btn btn-xs btn-default btn-custom">Add contact</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->appends(request()->except('page'))->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteUser(id, name){
    alertify.confirm("Delete user", "Are you sure you want to delete " + name + "?",
            function(){
            $.ajax({
            url: "{{route('users.index')}}/" + id,
                    type: 'DELETE',
                    data: {_token: '{{csrf_token()}}'},
                    success: function(result) {
                    window.location.reload();
                    }
            });
            },
            function(){
            alertify.error('Cancel');
            });
    }

    function addUser(id, name) {
    alertify.confirm("Add user to contacts", "Are you sure you want to add " + name + " to your contacts list?",
            function() {
            $.ajax({
            url: "{{route('contacts.store')}}",
                    type: 'POST',
                    data: {
                    _token: '{{csrf_token()}}',
                            id: id
                    },
                    success: function(result) {
                    window.location.href = "{{route('contacts.index')}}";
                    },
                    error: function() {
                    alertify.error('Error');
                    }
            });
            },
            function() {
            alertify.error('Cancel');
            });
    }
</script>

@endsection
