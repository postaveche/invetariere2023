@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adauga o Sectie</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('sectii.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Denumirea</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Denumirea Sectiei" required>
                <small id="emailHelp" class="form-text text-muted">Adaugati denumirea sectiei</small>
            </div>
            <button type="submit" class="btn btn-primary">Adauga</button>
        </form>
    </div>
@endsection
