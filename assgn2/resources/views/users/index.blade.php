@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Login</h1>

    {!! Form::open(['action' => 'UsersController@login','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}}
        </div>
        {{Form::submit('Login',['class'=>'btn btn-info'])}}
        <button type="button" class="btn btn-success" onclick="location.href='/user/create'"> Register </button>
    {!! Form::close() !!}
</div>
    
@endsection  