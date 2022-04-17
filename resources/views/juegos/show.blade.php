@extends('juegos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Juegos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('juegos.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $juego->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plataformas:</strong>
                {{ $juego->plataformas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Año de lanzamiento:</strong>
                {{ $juego->anlanzamiento }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Género:</strong>
                {{ $juego->genero }}
            </div>
        </div>
    </div>
@endsection