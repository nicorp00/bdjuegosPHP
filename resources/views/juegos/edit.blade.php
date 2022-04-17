@extends('juegos.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Juegos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('juegos.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Vaya!</strong> Hay problemas con la entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('juegos.update',$juego->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $juego->nombre }}" class="form-control" placeholder="Nombre del juego">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Plataformas:</strong>
                    <input type="text" class="form-control" name="plataformas" value="{{ $juego->plataformas }}" placeholder="Plataformas del juego">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Año de lanzamiento:</strong>
                    <input type="text" name="anlanzamiento" value="{{ $juego->anlanzamiento }}" class="form-control" placeholder="Año de lanzamiento">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Género:</strong>
                    <input type="text" class="form-control" name="genero" value="{{ $juego->genero }}" placeholder="Género del juego">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
   
    </form>
@endsection