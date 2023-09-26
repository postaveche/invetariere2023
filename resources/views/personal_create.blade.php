@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adauga o Sectie</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('personal.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Denumirea</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Numele Persoanei" required>
                <small id="emailHelp" class="form-text text-muted">Adaugati numele si sectia persoanei</small>
            </div>
            <div class="form-group">
                <label for="selectSectii">Selectati sectia:</label>
                <select class="form-control" id="selectSectii" name="sectia">
                    @foreach($allsectii as $sectie)
                    <option value="{{$sectie->id}}">{{$sectie->nume}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Adauga</button>
        </form>
    </div>
@endsection
