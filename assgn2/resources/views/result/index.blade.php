@extends('layouts.app')
@section('content')
<div class="container">
        <h3>Result</h3>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Result Name</th>
                        <th>Result</th>
                    </tr>    
                </thead>
                <tbody>            
                @if(count($results) >0)
                    @php
                        $i = 1
                    @endphp
                    @foreach($results as $result)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$result->result_name}}</td>
                            <td>{{$result->report}}</td>
                        </tr>
                    
                        @php ($i++)
                    @endforeach

            </table>
        </div>        
                @else   
                    <p class="text-center">No Reports/Results Found</p>
                @endif
    
</div>    
@endsection