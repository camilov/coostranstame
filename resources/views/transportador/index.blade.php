@extends('admin.template.main')


@section('title','Lista de  Transportadores')


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


    <a href="{{route('transportador.create')}}" class="btn btn-info">Registrar nuevo Transportador</a><hr>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Cedula</th>
            <th>Nombre completo</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Usuario</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($transportador as $transportadores)
                <tr>
                    <td>{{$transportadores->idtransportador}}</td>
                    <td>{{$transportadores->cedula}}</td>
                    <td>{{$transportadores->nombres}}</td>
                    <td>{{$transportadores->apellidos}}</td>
                    <td>{{$transportadores->telefono}}</td>
                    <td>{{$transportadores->direccion}}</td>
                    <td>{{$transportadores->user->name}}</td>
                    
                    <td>
                    <a href="{{route('transportador.destroy',$transportadores->idtransportador)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach


        </tbody>
    </table>
    {!!$transportador->render()!!}
    
@endsection