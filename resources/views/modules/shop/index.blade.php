@extends('layouts.app')

@section('content')
    <div class="container " xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>My shop cart</h5>
                        <div class="col-xs-2">
                            <a class='btn btn-sm btn-primary pull-right' href='{{route('shop.create')}}'>New item</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="panel-body myStuff">

                        <ul class="event-list">

                            @foreach($shops as $shop)
                                <li>
                                    <div class="row">
                                    <div class="info">
                                    <div class="col-sm-8">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Produs</h3>
                                            </div>
                                            <div class="panel-body">
                                                {{ $shop->produs }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="col-sm-3">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Cantitate</h3>
                                            </div>
                                            <div class="panel-body">
                                                {{ $shop->cantitate }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>

                                <div class="social">
                                    <ul>
                                        <li class="google-plus" style="width:33%;">
                                            <a onclick="deleteProduct('{{$shop->id}}' , '{{$shop->produs}}')">
                                                <span class="fa fa-times"></span>
                                            </a>
                                        </li>
                                        <li class="google-plus" style="width:33%;">
                                            <a href = "{{route('shop.edit', $shop->id)}}">
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
        function deleteProduct(id, name) {

            alertify.confirm("Delete product", "Are you sure you want to delete " + name + "?",
                    function () {
                        $.ajax({
                            url: "{{route('shop.index')}}/" + id,
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

