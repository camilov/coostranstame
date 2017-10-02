@extends('admin.template.main')


@section('title','Lista de  Terceros')


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


    <a href="{{route('tercero.create')}}" class="btn btn-info">Registrar nuevo Tercero</a><hr>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Cedula</th>
            <th>Ciudad</th>
            <th>Nombre completo</th>
            <th>Apellidos</th>
            <th>Nit</th>
            <th>Direccion</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($tercero as $terceros)
                <tr>
                    <td>{{$terceros->idtercero}}</td>
                    <td>{{$terceros->cedula}}</td>
                    <td>{{$terceros->ciudad}}</td>
                    <td>{{$terceros->nombre}}</td>
                    <td>{{$terceros->apellido}}</td>
                    <td>{{$terceros->nit}}</td>
                    <td>{{$terceros->direccion}}</td>
                    <td>{{$terceros->celular}}</td>
                    <td>{{$terceros->correo}}</td>
                    <td>{{$terceros->user->name}}</td>
                    
                    <td><a href="#" class="btn btn-warning">Editar</a>
                    
                    
                    <a href="{{route('tercero.destroy',$terceros->idtercero)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach


        </tbody>
    </table>
    {!!$tercero->render()!!}
    
@endsection