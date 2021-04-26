@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données PORTFOLIO</h1>
    <form action="{{route('portfolioUpdate', $portfolio->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="filter">Filter</label>
            <input type="text" value="{{$portfolio->filter}}" class="form-control @error ('filter') is-invalid @enderror" value={{old('filter')}} id="filter" name="filter" placeholder="{{$portfolio->filter}}">
            @error('filter')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="texte" value="{{$portfolio->image}}" class="form-control @error ('image') is-invalid @enderror" value={{old('image')}} id="image" name="image" placeholder="{{$portfolio->image}}">
            @error('image')
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