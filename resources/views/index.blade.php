@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Dashboard -->
<div class="row p-4 g-4">
    <div class="col-6 card sky-background" style="width: 300px; height: 150px;">
        <div class="card-body d-flex align-items-center justify-content-center">
            <i class="fa fa-home fa-5x text-white"></i>
            <div class="ml-3 text-white">
                Dashboard
                <span><a href="dashboard.php" class="text-white">View Details</a></span>
            </div>
        </div>
    </div>

    <!-- Enseignants -->
    <div class="col-6 card sky-background ml-4 mr-4" style="width: 300px; height: 150px;">
        <div class="card-body d-flex align-items-center justify-content-center">
            <i class="fa fa-users fa-5x text-white"></i>
            <div class="ml-3 text-white">
                Enseignants
                <span><a href="enseignants.php" class="text-white">View Details</a></span>
            </div>
        </div>
    </div>

    <!-- Matieres -->
    <div class="col-6 card sky-background" style="width: 300px; height: 150px;">
        <div class="card-body d-flex align-items-center justify-content-center">
            <i class="fa fa-book fa-5x text-white"></i>
            <div class="ml-3 text-white">
                Matieres
                <span><a href="matieres.php" class="text-white">View Details</a></span>
            </div>
        </div>
    </div>

    <!-- Notes -->
    <div class="col-6 card sky-background" style="width: 300px; height: 150px;">
        <div class="card-body d-flex align-items-center justify-content-center">
            <i class="fa fa-clipboard fa-5x text-white"></i>
            <div class="ml-3 text-white">
                Notes
                <span><a href="notes.php" class="text-white">View Details</a></span>
            </div>
        </div>
    </div>
</div>




@endsection