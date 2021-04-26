@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données ABOUT</h1>
    <form action="{{route('aboutUpdate', $perso->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" value="{{$perso->nom}}" class="form-control @error ('nom') is-invalid @enderror" value={{old('nom')}} id="nom" name="nom" placeholder="{{$perso->nom}}">
            @error('nom')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" value="{{$perso->prenom}}" class="form-control @error ('prenom') is-invalid @enderror" value={{old('prenom')}} id="prenom" name="prenom" placeholder="{{$perso->prenom}}">
            @error('prenom')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" value="{{$perso->job}}" class="form-control" id="job" name="job" placeholder="{{$perso->job}}">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" value="{{$perso->website}}" class="form-control" id="website" name="website" placeholder="{{$perso->website}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" value="{{$perso->phone}}" class="form-control" id="phone" name="phone" placeholder="{{$perso->phone}}">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" value="{{$perso->city}}" class="form-control" id="city" name="city" placeholder="{{$perso->city}}">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" value="{{$perso->country}}" class="form-control" id="country" name="country" placeholder="{{$perso->country}}">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" value="{{$perso->age}}" class="form-control" id="age" name="age" placeholder="{{$perso->age}}">
        </div>
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" value="{{$perso->degree}}" class="form-control" id="degree" name="degree" placeholder="{{$perso->degree}}">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" value="{{$perso->email}}" class="form-control" id="email" name="email" placeholder="{{$perso->email}}">
        </div>
        <div class="form-group">
            <label for="state">Freelance</label>
            <input type="text" value="{{$perso->state}}" class="form-control" id="state" name="state" placeholder="{{$perso->state}}">
        </div>
        <div class="form-group">
            <label for="intro">Intro</label>
            <input type="text" value="{{$perso->intro}}" class="form-control" id="intro" name="intro" placeholder="{{$perso->intro}}">
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" value="{{$perso->bio}}" class="form-control" id="bio" name="bio" placeholder="{{$perso->bio}}">
        </div>
        <div class="form-group">
            <label for="italic">Italic</label>
            <input type="text" value="{{$perso->italic}}" class="form-control" id="italic" name="italic" placeholder="{{$perso->italic}}">
        </div>
        <button type="submit" class="btn btn-success">Actualiser</button>
    </form>
    <div class="text-center mb-5">
        <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour</button></a>
    </div>
@endsection
