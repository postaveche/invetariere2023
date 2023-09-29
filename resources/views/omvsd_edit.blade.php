@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editare OMVSD: {{$omvsd->name}}</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('omvsd.update', $omvsd->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nume">Denumirea</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$omvsd->name}}" placeholder="Denumirea OMVSD" required>
                <small id="numeHelp" class="form-text text-muted">Adaugati denumirea OMVSD</small>
            </div>
            <div class="form-group">
                <label for="nr_inv">Numarul de inventar</label>
                <input type="text" class="form-control" id="name" name="nr_inv" value="{{$omvsd->nr_inv}}" placeholder="Nr. de inventar" required>
                <small id="nr_invHelp" class="form-text text-muted">Adaugati numarul de inventar MF</small>
            </div>
            <div class="form-group">
                <label for="selectTip">Selectati tipul:</label>
                <select class="form-control" id="selectTip" name="tip">
                    <option value="0">Neatribuit</option>
                    @foreach($alltip as $tip)
                        @if($omvsd->tip_id == $tip->id)
                            <option value="{{$tip->id}}" selected>{{$tip->nume}}</option>
                        @else
                            <option value="{{$tip->id}}">{{$tip->nume}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="selectSectii">Selectati sectia:</label>
                <select class="form-control" id="selectSectii" name="sectia">
                    <option value="0">Neatribuit</option>
                    @foreach($allsectii as $sectie)
                        @if($omvsd->section_id == $sectie->id)
                            <option value="{{$sectie->id}}" selected>{{$sectie->nume}}</option>
                        @else
                            <option value="{{$sectie->id}}">{{$sectie->nume}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="selectPersonal">Selectati persoana:</label>
                <select class="form-control" id="selectPersonal" name="person">
                    <option value="0">Neatribuit</option>
                    @foreach($allpersonal as $person)
                        @if($omvsd->personal_id == $person->id)
                            <option value="{{$person->id}}" selected>{{$person->name}}</option>
                        @else
                            <option value="{{$person->id}}">{{$person->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
