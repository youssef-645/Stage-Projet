@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Dashboard -->
<div class="row p-4 g-4">
    <div class="col-md-6">
        <div class="card sky-background" style="height: 150px;background-color:tomato">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-home fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Classes
                    <span>
                        <form action="{{ route('classes.index') }}" method="GET">
                            <button type="submit" class="btn btn-link btn-sm">Details</button>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Enseignants -->
    <div class="col-md-6">
        <div class="card sky-background" style="height: 150px;;background-color:lightgreen">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-users fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Enseignants
                    <span>
                        <form action="{{ route('enseignants.index') }}" method="GET">
                            <button type="submit" class="btn btn-link btn-sm">Details</button>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Matieres -->
    <div class="col-md-6">
        <div class="card sky-background" style="height: 150px;;background-color:grey">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-book fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Matieres
                    <span>
                        <form action="{{ route('matieres.index') }}" method="GET">
                            <button type="submit" class="btn btn-link btn-sm">Details</button>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Notes -->
    <div class="col-md-6">
        <div class="card sky-background" style="height: 150px;;background-color:orange">
            <div class="card-body d-flex align-items-center justify-content-center">
                <i class="fa fa-clipboard fa-5x text-white"></i>
                <div class="ml-3 text-white">
                    Les Notes
                    <span>
                        <form action="{{ route('notes.index') }}" method="GET">
                            <button type="submit" class="btn btn-link btn-sm">Details</button>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection