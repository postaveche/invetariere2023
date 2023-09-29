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
                    <th style="width: 60px">Nr. inv</th>
                    <th>Tip</th>
                    <th>Sectia</th>
                    <th style="width: 150px">Persoana</th>
                    <th style="width: 50px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allmf as $mf)
                <tr>
                    <td>{{$mf->id}}</td>
                    <td>{{$mf->name}}</td>
                    <td>{{$mf->nr_inv}}</td>
                    @if($mf->tip == null)
                        <td>{{$mf->tip_id}}</td>
                    @else
                        <td>{{$mf->tip->nume}}</td>
                    @endif
                    @if($mf->section == null)
                        <td>{{$mf->section_id}}</td>
                    @else
                        <td>{{$mf->section->nume}}</td>
                    @endif
                    @if($mf->personal == null)
                        <td>{{$mf->personal_id}}</td>
                    @else
                        <td>{{$mf->personal->name}}</td>
                    @endif
                    <td>
                        <a href="{{route('mf.edit', $mf->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>  |
                        <a href="{{route('mf.destroy', $mf->id)}}" style="color: red"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>@endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
