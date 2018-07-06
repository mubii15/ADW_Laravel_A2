@extends('layouts.app')
{{-- Laravel Collectives to use form --}}
@section('content')
<div class="container">
    <h1>Check Availability</h1>

    {!! Form::open(['action' => 'AvailableController@dateCheck','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('date','Date')}}
            {{Form::date('date','',['class'=>'form-control','placeholder'=>'Date'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
</div>
@endsection  