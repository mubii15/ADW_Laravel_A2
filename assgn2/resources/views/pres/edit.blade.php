@extends('layouts.app')
{{-- Laravel Collectives to use form --}}
@section('content')
    <div class="container">
        <h1>Extend Prescription</h1>

        {!! Form::open(['action' => ['PrescriptionController@update',$prescription->id],'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('date','Extend Upto')}}
                {{Form::date('date',$prescription->expire_at,['class'=>'form-control'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Extend',['class'=>'btn btn-info'])}}

        {!! Form::close() !!}
    </div>    
@endsection  