@extends('admin.template.main')


@section('title','Lista de Asignaciones')


@section('content')

    @if ($flash = session('messag')) 
        <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
     </div>
    @endif
    
    @if ($flash = session('message')) 
        <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
     </div>
    @endif

    @if(!session('mensaje')==null)
     <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         {{session('mensaje')}}
     </div>
    @endif


    <a href="{{route('asignacion.create')}}" class="btn btn-info">Registrar nueva asignacion</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Zona</th>
            <th>Tranportador</th>
            <th>Guia</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($asignacion as $asignaciones)
                <tr>
                    <td>{{$asignaciones->zona->zona}}</td>
                    <td>{{$asignaciones->transportador->nombres}}</td>
                    <td>{{$asignaciones->guia->remision}}</td>
                    <td>
                    <a href="{{route('asignacion.destroy',$asignaciones->idasignacion)}}" onclick="return confirm('¿Seguro que deseas eliminarla?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$asignacion->render()!!}

    
@endsection