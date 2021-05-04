@extends('layouts.app')

@section('title', 'Fiche d\'un rôle')

@section('content')
    <h1>{{ $role->role }}</h1>
    <nav><a href="{{ route('Role_index') }}">Retour à l'index</a></nav>
@endsection

