@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adauga OMVSD</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('omvsd.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nume">Denumirea</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Denumirea OMVSD" required>
                <small id="numeHelp" class="form-text text-muted">Adaugati denumirea OMVSD</small>
            </div>
            <div class="form-group">
                <label for="nr_inv">Numarul de inventar</label>
                <input type="text" class="form-control" id="name" name="nr_inv" placeholder="Nr. de inventar" required>
                <small id="nr_invHelp" class="form-text text-muted">Adaugati numarul de inventar MF</small>
            </div>
            <div class="form-group">
                <label for="selectTip">Selectati tipul:</label>
                <select class="form-control" id="selectTip" name="tip">
                    <option value="0">Neatribuit</option>
                    @foreach($alltip as $tip)
                        <option value="{{$tip->id}}">{{$tip->nume}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="selectSectii">Selectati sectia:</label>
                <select class="form-control" id="selectSectii" name="sectia">
                    <option value="0">Neatribuit</option>
                    @foreach($allsectii as $sectie)
                        <option value="{{$sectie->id}}">{{$sectie->nume}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="selectPersonal">Selectati persoana:</label>
                <select class="form-control" id="selectPersonal" name="person">
                    <option value="0">Neatribuit</option>
                    @foreach($allpersonal as $person)
                        <option value="{{$person->id}}">{{$person->name}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Adauga</button>
        </form>
    </div>
@endsection
