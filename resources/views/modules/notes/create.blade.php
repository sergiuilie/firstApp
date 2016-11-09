@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create note</div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['notes.store'], 'class' => 'form-horizontal']) !!}
                    <fieldset>
                        <legend>Create Note</legend>
                        {!! Form::appText('Body','body', NULL, ['placeholder' => 'Name'])  !!}
                        {!! Form::submit('Create Note', ['class' => 'btn btn-sm btn-primary']) !!}
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
