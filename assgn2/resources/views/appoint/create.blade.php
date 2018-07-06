@extends('layouts.app')
{{-- Laravel Collectives to use form --}}
@section('content')
    <div class="container">
        <h1>Book New Appointment</h1>

        {!! Form::open(['action' => 'ApointmentController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('username','Username')}}
                {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
            </div>
            <div class="form-group">
                {{Form::label('apointee_name','Apointment With :')}}
                {{Form::text('apointee_name','',['class'=>'form-control','placeholder'=>'Appointment With'])}}
            </div>
            <div class="form-group">
                {{Form::label('date','Date')}}
                {{Form::date('date','',['class'=>'form-control','placeholder'=>'Designation'])}}
            </div>
            {{Form::submit('Book',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>    
@endsection  