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
    

    
    <div class="botones">
               <div class="form-group">
                    <a href="{{route('cuadre.index',['descargar'=>'pdf'])}}" target="_blank" class="btn btn-warning">Ver Pdf </a>
                    <a href="{{route('cuadre.index',['descargar2'=>'excel'])}}" target="_blank" class="btn btn-warning">Ver Excel</a>

               </div>
      </div>
      <?php if ($zona =="12"): ?>
           <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>Guias</th>
                      <th>Forma pago</th>
                      <th>Valor</th>
                    </thead>
                           @foreach ($resumen as $remisiones)
                    <tr>
                       <td>{{$remisiones->remision}}</td>
                       <td>{{$remisiones->forma_pago}}</td>
                       <td>{{$remisiones->valor_neto}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
         
      <?php endif ?>

    <?php if ($zona=='13'): ?>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>Guias</th>
                      <th>Forma pago</th>
                      <th>Valor</th>
                    </thead>
                           @foreach ($resumen as $remisiones)
                    <tr>
                       <td>{{$remisiones->remision}}</td>
                       <td>{{$remisiones->forma_pago}}</td>
                       <td>{{$remisiones->valor_neto}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
               
              </div>
            </div>
      
    <?php endif ?>
  
@endsection