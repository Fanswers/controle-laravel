@extends('layouts.app')

@section('content')

<a href="/profileUser?informations">Mes informations</a>
<a href="/profileUser?posts">Mes posts</a>

@if (Request::has('informations'))
<li class="nav-item">
    <p>{{ Auth::user()->name }}</p>
    <p>{{ Auth::user()->email }}</p>
</li>
@endif
@endsection