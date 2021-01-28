@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/profileUser?informations">Mes informations</a>
        <a href="/profileUser?posts">Mes posts</a>
    </div>

    <div class="card-body">



        @if (Request::has('informations'))

        <p>Prénom : {{ Auth::user()->name }}</p>
        <p>Adresse mail : {{ Auth::user()->email }}</p>

        @endif
    </div>
</div>

@endsection