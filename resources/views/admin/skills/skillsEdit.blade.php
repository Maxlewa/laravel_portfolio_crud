@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données SKILLS</h1>
    <form action="{{route('skillsUpdate', $skills->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="codelg">Language de code</label>
            <input type="text" value="{{$skills->codelg}}" class="form-control @error ('codelg') is-invalid @enderror" value={{old('codelg')}} id="codelg" name="codelg" placeholder="{{$skills->codelg}}">
            @error('codelg')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="progress">Number</label>
            <input type="number" value="{{$skills->progress}}" class="form-control @error ('progress') is-invalid @enderror" value={{old('progress')}} id="progress" name="progress" placeholder="{{$skills->progress}}">
            @error('progress')
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