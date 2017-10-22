@extends('admin.template.main')


@section('title','Cuadre de caja')


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


    <!--<a href="{{route('transportador.create')}}" class="btn btn-info">Registrar nuevo Transportador</a><hr> -->
    <table class="table table-striped">
        <thead>
            <th>Nro de guias</th>
        </thead>        
    </table>
    <tbody>
        @foreach($zona as $zonas)
        <tr>
            <td>{{$zonas->zona}}</td>

        </tr>
        @endforeach

    </tbody>

     <table class="table table-striped">
           <thead>
            <th>Total contraentrega</th>
        </thead>
        
    </table>
     <tbody>
        @foreach($contado as $contados)
        <tr>
            <td>{{$contados->contado}}</td>

        </tr>
        @endforeach

    </tbody>

    <table class="table table-striped">
           <thead>
            <th>Total contado</th>
        </thead>

    </table>
     <tbody>
        @foreach($contra as $contras)
        <tr>
            <td>{{$contras->contra}}</td>

        </tr>
        @endforeach

    </tbody>

    
@endsection