@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Obiecte de mica valuare (OMVSD)</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a class="btn btn-outline-primary m-2" href="{{route('omvsd.create')}}" role="button">Add</a>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista OMVSD</h3>
        </div>

        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nume</th>
                    <th style="width: 60px">Nr. inv</th>
                    <th>Tip</th>
                    <th>Sectia</th>
                    <th style="width: 150px">Persoana</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allomvsd as $omvsd)
                <tr>
                    <td>{{$omvsd->id}}</td>
                    <td>{{$omvsd->name}}</td>
                    <td>{{$omvsd->nr_inv}}</td>
                    @if($omvsd->tip == null)
                        <td>{{$omvsd->tip_id}}</td>
                    @else
                        <td>{{$omvsd->tip->nume}}</td>
                    @endif
                    @if($omvsd->section == null)
                        <td>{{$omvsd->section_id}}</td>
                    @else
                        <td>{{$omvsd->section->nume}}</td>
                    @endif
                    @if($omvsd->personal == null)
                        <td>{{$omvsd->personal_id}}</td>
                    @else
                        <td>{{$omvsd->personal->name}}</td>
                    @endif
                    <td>
                        <div class="d-flex">
                        <a href="{{route('omvsd.edit', $omvsd->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>  |||
                            <a href="{{route('omvsd.destroy', $omvsd->id)}}" style="color: red"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>@endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
