@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sectii</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a class="btn btn-outline-primary m-2" href="{{route('sectii.create')}}" role="button">Add</a>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista sectiilor</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">Nr.</th>
                    <th>Denumrea</th>
                    <th style="width: 40px">act</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allsection as $section)
                <tr>
                    <td>{{$section->id}}</td>
                    <td>{{$section->nume}}</td>
                    <td><span class="badge bg-danger">Edit</span></td>
                </tr>@endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
