@extends('layouts.layout')

@section('titrePage')
    Les Vehicules
@endsection

@section('contenu')

    <h1 class="text-center">Bienvenue dans l'interface de gestion du Garage</h1>

    <div class="sep"></div>

    <p class="welcome-text">Ici, vous pourrez gérer facilement les véhicules en votre posséssion et même ajouter des commentaires pour chaque véhicule ! Vous pouvez ajouter des 
        véhicules en cliquant <a href="{{ route('vehicules.create') }}">ici</a> ou visionner ceux en votre posséssion <a href="{{ route('vehicules.index') }}">ici</a>.
    </p>


@endsection