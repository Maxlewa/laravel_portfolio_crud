@extends('layouts.index')

@section('content')
    <h1 class="text-center mt-4">Modifier les données CONTACT</h1>
    <form action="{{route('contactUpdate', $contact->id)}}" method="POST" class="w-50 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" value="{{$contact->location}}" class="form-control @error ('location') is-invalid @enderror" value={{old('location')}} id="location" name="location" placeholder="{{$contact->location}}">
            @error('location')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" value="{{$contact->email}}" class="form-control @error ('email') is-invalid @enderror" value={{old('email')}} id="email" name="email" placeholder="{{$contact->email}}">
            @error('email')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" value="{{$contact->phone}}" class="form-control @error ('phone') is-invalid @enderror" value={{old('phone')}} id="phone" name="phone" placeholder="{{$contact->phone}}">
            @error('phone')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="iframe">Iframe</label>
            <input type="text" value="{{$contact->iframe}}" class="form-control @error ('iframe') is-invalid @enderror" value={{old('iframe')}} id="iframe" name="iframe" placeholder="{{$contact->iframe}}">
            @error('iframe')
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
