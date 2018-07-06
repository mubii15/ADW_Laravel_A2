@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h3> Your Appointments </h3>
            <button type="button" class="btn btn-success" onclick="location.href='/apoint/create'"> Book Appointment </button>
            {{-- <a onclick=""">Book</a>         --}}
        </div>
    </div>
    <div class="row">
        <div class="container">
                @if(count($appointments) > 0)
                @php ($i =1)
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No | </th>
                            <th>Appointment With | </th>
                            <th>Appointment Date </th>
                        </tr>
                    </thead>
                    <tbody>    
                    @foreach($appointments as $appoint)
                        <tr>
                        <td>{{$i}}</td>
                        <td>{{$appoint->apointee_username}}</td>
                        <td>{{$appoint->apointment_date}}</td>
                        <td>{!! Form::open(['action' => ['ApointmentController@destroy',$appoint->id],'method'=>'delete']) !!}
                                {{Form::submit('Cancel',['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        </td>
                        <td>{!! Form::open(['action' => ['ApointmentController@edit',$appoint->id],'method'=>'get']) !!}
                                {{Form::submit('Edit',['class'=>'btn btn-info'])}}
                            {!! Form::close() !!}
                        </td>
        
                        </tr>
                        @php ($i++)
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection