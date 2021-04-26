@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1 class="blogCreateH1">Créer un article BLOG</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST" action={{route('factsStore')}}>
            @csrf
            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="text" class="form-control @error ('icon') is-invalid @enderror" id="icon" name="icon">
                @error('icon')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control @error ('number') is-invalid @enderror" id="number" name="number">
                @error('number')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phrase">Phrase</label>
                <input type="text" class="form-control @error ('phrase') is-invalid @enderror" id="phrase" name="phrase">
                @error('phrase')
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