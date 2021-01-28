@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/profileUser?informations">Mes informations</a>
        <a href="/profileUser?recettes">Mes recettes</a>
    </div>

    <div class="card-body">



        @if (Request::has('informations'))

        <p>Prénom : {{ Auth::user()->name }}</p>
        <p>Adresse mail : {{ Auth::user()->email }}</p>

        @endif
        @if (Request::has('recettes'))
        <a href="/profileUser?addRecettes">Ajouter une nouvelle recette.</a>
        <br>
        <p>-----</p>
        <br>

        @foreach($recette as $recette)
        <p>{{ $recette->name }}</p>
        <p>{{ $recette->description}}</p>
        <br>
        <p> ----- </p>
        <br>
        @endforeach
        @endif
        @if (Request::has('addRecettes'))
        <div class="col-md-6">
            <div class="card rounded-none">
                <div class="card-header">{{ __('Ajouter une recette') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="/new_recipe">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection