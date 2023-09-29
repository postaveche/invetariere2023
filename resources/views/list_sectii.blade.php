@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Sectiilor:</h1>
        <hr>
    @foreach($sectii as $sectia)
        <h4><a href="{{route('sectii_info', $sectia->id)}}" style="color: #000000; text-decoration: none"> {{$sectia->nume}} </a> - (MF: {{count_mf($sectia->id)}}| OMVSD: {{count_omvsd($sectia->id)}})</h4>
    @endforeach
        <hr>
    </div>
@endsection
