@extends('admin.template.main')


@section('title','Lista de  Zonas')


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


    <a href="{{route('zona.create')}}" class="btn btn-info">Registrar nueva zona</a><hr>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Zona</th>
            <th>Usuario</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($zona as $zonas)
                <tr>
                    <td>{{$zonas->idzona}}</td>
                    <td>{{$zonas->zona}}</td>
                    <td>{{$zonas->user->name}}</td>
                   
                    
                    <td>
                    <a href="{{route('zona.destroy',$zonas->idzona)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach


        </tbody>
    </table>
    {!!$zona->render()!!}
@endsection