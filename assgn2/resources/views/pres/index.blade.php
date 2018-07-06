@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h3> Your Prescriptions </h3>
            {{-- <button type="button" class="btn btn-success" onclick="location.href='/apoint/create'"> Book Appointment </button> --}}
            {{-- <a onclick=""">Book</a>         --}}
        </div>
    </div>
    <div class="row">
        <div class="container">
                @if(count($preses) > 0)
                @php ($i =1)
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No | </th>
                            <th>Expiry Date | </th>
                            <th>Medication Name </th>
                        </tr>
                    </thead>
                    <tbody>    
                    @foreach($preses as $pres)
                        <tr>
                        <td>{{$i}}</td>
                        <td>{{$pres->expire_at}}</td>
                        <td>{{$pres->medication_name}}</td>
                        <td>{!! Form::open(['action' => ['PrescriptionController@edit',$pres->id],'method'=>'get']) !!}
                                {{Form::submit('Extend',['class'=>'btn btn-warning'])}}
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