@extends('juegos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Información de los juegos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('juegos.create') }}"> Crear Nuevo Juego</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Plataformas</th>
            <th>Año de lanzamiento</th>
            <th>Género</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($juegos as $juego)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $juego->nombre }}</td>
            <td>{{ $juego->plataformas }}</td>
            <td>{{ $juego->anlanzamiento }}</td>
            <td>{{ $juego->genero }}</td>
            <td>
                <form action="{{ route('juegos.destroy',$juego->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('juegos.show',$juego->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('juegos.edit',$juego->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
  
    {!! $juegos->links() !!}
      
@endsection