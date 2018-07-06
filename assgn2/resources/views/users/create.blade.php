@extends('layouts.app')
{{-- Laravel Collectives to use form --}}
@section('content')
<div class="container">    
    <h1 class="text-center">Register</h1>

    {!! Form::open(['action' => 'UsersController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}}
        </div>
        <div class="form-group">
            {{Form::label('designation','Designation')}}
            {{Form::text('designation','',['class'=>'form-control','placeholder'=>'Designation'])}}
        </div>
        {{Form::submit('Register',['class'=>'btn btn-success'])}}

    {!! Form::close() !!}
</div>
@endsection  