@extends('layouts.app')

@section('title', 'Fiche localité')

@section('content')
    <h1>{{ $locality->postal_code }} {{ $locality->locality }}</h1>
    
    <nav><a href="{{ route('locality_index') }}">retour</a></nav>
@endsection

