@extends('admin.template.main')


@section('title','Lista de usuarios')


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
    
    <a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><hr>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->ID}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->tipo == "admin")
                            <span class="label label-danger">{{$user->tipo}}</span>
                        @else
                            <span class="label label-primary">{{$user->tipo}}</span>
                        @endif
                    </td>
                    <td>
                    <a href="{{route('users.edit',$user->ID)}}" class="btn btn-warning"> Editar</a>
                    
                    
                    <a href="{{route('users.destroy',$user->ID)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>

                
                @endforeach


        </tbody>
    </table>
    
    {!!$users->render()!!}
    
@endsection