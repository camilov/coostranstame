@extends('admin.template.main')


@section('title','Lista de Guias')


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


    <a href="{{route('guia.create')}}" class="btn btn-info">Registrar nueva Guia</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Remision</th>
            <th>Valor declarado</th>
            <th>Flete</th>
            <th>Valor neto</th>
            <th>Seguro</th>
            <th>Tipo remesa</th>
            <th>Forma pago</th>
            <th>Remitente</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Accion</th>
          
        </thead>
        <tbody>
            @foreach($guia as $guias)
                <tr>
                    <td>{{$guias->remision}}</td>
                    <td>{{$guias->valor_declarado}}</td>
                    <td>{{$guias->flete}}</td>
                    <td>{{$guias->valor_neto}}</td>
                    <td>{{$guias->seguro}}</td>
                    <td>{{$guias->tipo_remesa}}</td>
                    <td>{{$guias->forma_pago}}</td>
                    <td>{{$guias->tercero->nombre}}</td>
                    <td>{{$guias->zona->zona}}</td>
                    <td>{{$guias->zona1->zona}}</td>
              
            
                    
                    <td>        
                    <a href="{{route('guia.destroy',$guias->idguia)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {!!$guia->render()!!}
    
@endsection