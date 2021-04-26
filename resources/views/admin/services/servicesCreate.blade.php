@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Créer un article SERVICES</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST" action={{route('servicesStore')}}>
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
                <label for="delay">Delay</label>
                <input type="number" class="form-control @error ('delay') is-invalid @enderror" id="delay" name="delay">
                @error('delay')
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
                <label for="text">Text</label>
                <input type="text" class="form-control @error ('text') is-invalid @enderror" id="text" name="text">
                @error('text')
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