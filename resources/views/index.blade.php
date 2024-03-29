@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Dashboard -->
<div class="row p-4 g-4">
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('classes.index') }}" style="height: 150px; background-color: tomato;">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-home fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Classes
                </div>
            </div>
        </div>
    </div>

    <!-- Enseignants -->
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('enseignants.index') }}" style="height: 150px; background-color: lightgreen;">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-users fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Enseignants
                </div>
            </div>
        </div>
    </div>

    <!-- Matieres -->
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('matieres.index') }}" style="height: 150px; background-color: grey;">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-book fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Matieres
                </div>
            </div>
        </div>
    </div>

    <!-- Notes -->
    <div class="col-md-6">
        <div class="card sky-background clickable-card" data-route="{{ route('notes.index') }}" style="height: 150px; background-color: orange;">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-clipboard fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Notes
                </div>
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