@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">  {{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> 
                            <img alt="User Pic" src="http://tr3.cbsistatic.com/fly/bundles/techrepubliccore/images/icons/standard/icon-user-default.png" class="img-circle img-responsive"> 
                        </div>

                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>{{$user->birthDate->toFormattedDateString()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>{{$user->geder ? "Female" : "Male"}}</td>
                                    </tr>
                                    <tr>
                                        <td>Addresses</td>
                                        <td>
                                            <ul style="list-style: square">
                                                @foreach($user->addresses as $address)
                                                <li>{{$address->street}}; <b>nr.</b>{{$address->number}}; <b>zip.</b> {{$address->zip}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer"></div>

            </div>
        </div>

    </div>
</div>
@endsection
