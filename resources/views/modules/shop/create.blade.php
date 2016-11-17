@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Write the name of the product</div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['shop.store'], 'class' => 'form-horizontal']) !!}
                    <fieldset>
                        {!! Form::appText('Product','produs', NULL, ['placeholder' => 'Name of product...'])  !!}
                        {!! Form::appText('Cantitate','cantitate', NULL, ['placeholder' => 'Cantitate...'])  !!}
                        {!! Form::submit('Create Product', ['class' => 'btn btn-sm btn-primary']) !!}
                    </fieldset>
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

