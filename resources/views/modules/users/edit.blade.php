@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit <b>{{$user->name}}</b></div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['users.update', $user->id] , 'method' => 'PUT' , 'class' => 'form-horizontal']) !!}
                    {!!  Form::hidden('id', $user->id)  !!}
                    <fieldset>
                        <legend>Edit User</legend>
                        {!! Form::appText('Name','name', $user->name, ['placeholder' => 'Name', 'class' => "form-control"])  !!}
                        {!! Form::appEmail('Email','email', $user->email, ['placeholder' => 'Email', 'class' => "form-control"])  !!}
                        {!! Form::appPassword('Password','password', ['placeholder' => 'Password', 'class' => "form-control"])  !!}
                        {!! Form::appPassword('Password Confirmation','password_confirmation', ['placeholder' => 'Password Confirmation', 'class' => "form-control"])  !!}
                        {!! Form::submit('Edit User', ['class' => 'btn btn-sm btn-primary']) !!}
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
