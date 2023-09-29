@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Obiecte de mica valuare (OMVSD) Neatribuite</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista OMVSD Neatribuite</h3>
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
                            <td>{{$nr++}}</td>
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
                            <td><span class="badge bg-danger"><i class="fa-solid fa-trash"></i></span></td>
                        </tr>@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
