@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données ABOUT</h1>
    <form action="{{route('factsUpdate', $facts->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" value="{{$facts->icon}}" class="form-control @error ('icon') is-invalid @enderror" value={{old('icon')}} id="icon" name="icon" placeholder="{{$facts->icon}}">
            @error('icon')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="number" value="{{$facts->number}}" class="form-control @error ('number') is-invalid @enderror" value={{old('number')}} id="number" name="number" placeholder="{{$facts->number}}">
            @error('icon')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$facts->title}}" class="form-control @error ('title') is-invalid @enderror" value={{old('title')}} id="title" name="title" placeholder="{{$facts->title}}">
            @error('title')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phrase">Phrase</label>
            <input type="text" value="{{$facts->phrase}}" class="form-control @error ('phrase') is-invalid @enderror" value={{old('phrase')}} id="phrase" name="phrase" placeholder="{{$facts->phrase}}">
            @error('phrase')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-success">Actualiser</button>
    </form>
    <div class="text-center mb-5">
        <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour</button></a>
    </div>
@endsection