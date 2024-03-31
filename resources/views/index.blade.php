@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Dashboard -->
<div class="row p-4 g-4">
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('classes.index') }}" style="height: 150px">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-home fa-5x text-white"></i>
                <h3 class="ml-3 text-white">
                    Les classes
                    <h1 class="badge m-2 bg-success badge-lg">{{ $classCount }}</h1>
                </h3>
            </div>
        </div>
    </div>

    <!-- Enseignants -->
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('enseignants.index') }}" style="height: 150px">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-users fa-5x text-white"></i>
                <h3 class="ml-3 text-white">
                    Les enseignants
                    <h1 class="badge m-2 bg-success badge-lg">{{ $enseignantCount }}</h1>
                </h3>
            </div>
        </div>
    </div>

    <!-- Matieres -->
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('matieres.index') }}" style="height: 150px">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-book fa-5x text-white"></i>
                <h3 class="ml-3 text-white">
                    Les matieres
                    <h1 class="badge m-2 bg-success badge-lg">{{ $matiereCount }}</h1>
                </h3>
            </div>
        </div>
    </div>

    <!-- Notes -->

    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('notes.index') }}" style="height: 150px">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-clipboard fa-5x text-white"></i>
                <h3 class="ml-3 text-white">
                    Les notes
                    <h1 class="badge m-2 bg-success badge-lg">{{ $noteCount }}</h1>
                </h3>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var clickableCards = document.querySelectorAll('.clickable-card');

        clickableCards.forEach(function(card) {
            card.addEventListener('click', function() {
                var route = this.getAttribute('data-route');
                window.location.href = route;
            });
        });
    });
</script>

@endsection