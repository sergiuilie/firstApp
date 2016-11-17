@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route' => ['shop.update' , $shop->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        <fieldset>
                            <legend>Edit shop cart</legend>
                            {!! Form::appText('Produs','produs', $shop->produs, ['placeholder' => 'Produs'])  !!}
                            {!! Form::appText('Cantitate','cantitate', $shop->cantitate, ['placeholder' => 'Cantitate'])  !!}
                            {!! Form::submit('Edit Shop Cart', ['class' => 'btn btn-sm btn-primary']) !!}
                        </fieldset>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
