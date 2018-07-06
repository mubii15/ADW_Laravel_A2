@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Availability</h1>

    @if(count($avails) > 0)
        @foreach($avails as $a)
            <div class="well">
                <h3><a href="/available/{{$a->id}}">Book</a></h3>
            </div>
        @endforeach
        {{-- {{$avail->links()}} --}}
    @else
        <p> No Availability </p>
    @endif
</div>
@endsection  