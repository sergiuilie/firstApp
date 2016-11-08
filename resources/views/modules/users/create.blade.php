@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create user</div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['users.store'], 'class' => 'form-horizontal']) !!}
                    <fieldset>
                        <legend>Create User</legend>
                        {!! Form::appText('Name','name', NULL, ['placeholder' => 'Name'])  !!}
                        {!! Form::appEmail('Email','email', NULL, ['placeholder' => 'Email'])  !!}
                        {!! Form::submit('Create User', ['class' => 'btn btn-sm btn-primary']) !!}
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
