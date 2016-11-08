@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>My Contacts</h5>
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
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->user->name}}</td>
                                <td>{{$contact->user->email}}</td>
                                <td>
                                    <a href="{{route('users.show', $contact->user->id)}}" class="btn btn-xs btn-info">View</a>
                                    <button onclick="deleteUser({{$contact->id}}, '{{$contact->user->name}}')" class="btn btn-xs btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$contacts->appends(request()->except('page'))->render()}}
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
            url: "{{route('contacts.index')}}/" + id,
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
</script>

@endsection
