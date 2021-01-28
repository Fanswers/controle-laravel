@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Request::has('recettes'))
            <div class="card">
                <div class="card-header">Toutes les recettes</div>

                <div class="card-body">
                    @foreach($recette as $recette)
                    @foreach($userID as $user)
                    @if($recette->user_id == $user->id)
                    <p>{{ $user->name }}</p>
                    @endif
                    @endforeach
                    <p>{{ $recette->name }}</p>
                    <p>{{ $recette->description }}</p>
                    <br>
                    <p> ----- </p>
                    <br>
                    @endforeach
                </div>
            </div>
            @endif
            @if (Request::has('utilisateurs'))
            <div class="card">
                <div class="card-header">Tous nos utilisateurs</div>

                <div class="card-body">
                    @foreach($user as $user)
                    <p>{{ $user->name }}</p>
                    <p>Inscrit depuis le {{ $user->created_at }} .</p>
                    <br>
                    <p> ----- </p>
                    <br>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection