@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données PORTFOLIO</h1>
    <form action="{{route('portfolioUpdate', $portfolio->id)}}" method="POST" class="w-50 mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="filter">Filter</label>
            <select type="text" value="{{$portfolio->filter}}" class="form-control @error ('filter') is-invalid @enderror" value={{old('filter')}} id="filter" name="filter" placeholder="{{$portfolio->filter}}">
                <option value="filter-web">filter-web</option>
                <option value="filter-app">filter-app</option>
                <option value="filter-card">filter-card</option>
            </select>
            @error('filter')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" value="{{$portfolio->image}}" class="form-control @error ('image') is-invalid @enderror" value={{old('image')}} id="image" name="image" placeholder="{{$portfolio->image}}" >
            @error('image')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-success">Actualiser</button>
    </form>
    <div class="d-flex justify-content-center">
        <form method="post" action="{{route('portfolioDestroy', $portfolio->id)}}" class="mx-2">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <div class="mx-2">
            <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour</button></a>
        </div>
    </div>
@endsection