@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mijloace Fixe</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a class="btn btn-outline-primary m-2" href="{{route('mf.create')}}" role="button">Add</a>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista mijloacelor fixe</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nume</th>
                    <th>Sectia</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allperson as $personal)
                <tr>
                    <td>{{$personal->id}}</td>
                    <td>{{$personal->name}}</td>
                    <td>{{$personal->section->nume}}</td>
                    <td><span class="badge bg-danger">Edit</span></td>
                </tr>@endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
