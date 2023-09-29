@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Info sectie: </h1>
        <hr>
        <h3>MF:</h3>
        @foreach($mf as $item)
            <p>{{$item->nr_inv}} | {{$item->name}}</p>
        @endforeach
        <h3>OMVSD</h3>
        @foreach($omvsd as $item)
            <p>{{$item->nr_inv}} | {{$item->name}}</p>
        @endforeach
        <hr>
    </div>
@endsection
