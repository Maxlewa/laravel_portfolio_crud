@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Créer un article PORTFOLIO</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST" action={{route('portfolioStore')}}>
            @csrf
            <div class="form-group">
                <label for="filter">Filter</label>
                <input type="text" class="form-control @error ('filter') is-invalid @enderror" id="filter" name="filter">
                @error('filter')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="texte" class="form-control @error ('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">SUBMIT</button>
        </form>
        <div class="text-center">
            <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour</button></a>
        </div>
    </div>
@endsection