@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adauga un tip de tehnica</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('tip.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Denumirea</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Denumirea tipului de tehnica" required>
                <small id="emailHelp" class="form-text text-muted">Adaugati denumirea tipului de tehnica</small>
            </div>
            <button type="submit" class="btn btn-primary">Adauga</button>
        </form>
    </div>
@endsection
