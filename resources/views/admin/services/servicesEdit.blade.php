@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données SERVICES</h1>
    <form action="{{route('servicesUpdate', $services->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" value="{{$services->icon}}" class="form-control @error ('icon') is-invalid @enderror" value={{old('icon')}} id="icon" name="icon" placeholder="{{$services->icon}}">
            @error('icon')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="delay">Delay</label>
            <input type="number" value="{{$services->delay}}" class="form-control @error ('delay') is-invalid @enderror" value={{old('delay')}} id="delay" name="delay" placeholder="{{$services->delay}}">
            @error('delay')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$services->title}}" class="form-control @error ('title') is-invalid @enderror" value={{old('title')}} id="title" name="title" placeholder="{{$services->title}}">
            @error('title')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" value="{{$services->text}}" class="form-control @error ('text') is-invalid @enderror" value={{old('text')}} id="text" name="text" placeholder="{{$services->text}}">
            @error('text')
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