@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tipurile de dispozitive</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a class="btn btn-outline-primary m-2" href="{{route('tip.create')}}" role="button">Add</a>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista tipurilor de dispozitive</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th style="width: 40px">Denumirea</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alltip as $tip)
                <tr>
                    <td>{{$tip->id}}</td>
                    <td>{{$tip->nume}}</td>
                    <td><span class="badge bg-danger">Edit</span></td>
                </tr>@endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
