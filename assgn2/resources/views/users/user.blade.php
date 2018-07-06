@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="well">
                <h3>User Details</h3>
                <p>Name : {{$user->name}}</p>
                <p>Email : {{$user->email}}</p>
                <p>Username : {{$user->username}}</p>
                <p>User Type : {{$user->designation}}</p>
            </div>                
        </div>    
        @if($user->designation != "User")
        <div class="row">
            <a href="/apoint">Appointment</a> | <a href="/available">Check Availability</a> | <a href="/chart">Check Availability Chart</a>
        </div>
        @else
        <div class="row">
            <a href="/results/{{$user->id}}">Report</a> | <a href="/apoint/{{$user->username}}">Appointment</a> | <a href="/prescription/{{$user->username}}">Prescription</a> | <a href="/available">Check Availability</a>
        </div>
        @endif
         
    </div>
    
@endsection  