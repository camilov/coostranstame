@extends('admin.template.main')


@section('title','Crear guia')


@section('content')
        
          @if ($flash = session('mensaje')) 
        <div class="alert alert-success">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 {{ $flash }}
        </div>
          @endif
    

        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)      <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
       {!! Form::open(['route'=>'guia.store','method'=>'POST']) !!}
        
            <div class="form-group">
                {!! Form::label('remision','remision')!!}
                {!! Form::text('remision',null,['class'=>'form-control','placeholder'=>'Remision','required'])!!}
            </div>
            
            <div class="form-group">
                {!! Form::label('valor declarado','valor declarado')!!}
                {!! Form::text('valor declarado',null,['class'=>'form-control','placeholder'=>'valor declarado','required'])!!}
            </div>
            
            <div class="form-group">
                {!! Form::label('flete','flete')!!}
                {!! Form::text('flete',null,['class'=>'form-control','placeholder'=>'flete','required'])!!}
            </div>
            
            <div class="form-group">
                {!! Form::label('valor neto','valor neto')!!}
                {!! Form::text('valor neto',null,['class'=>'form-control','placeholder'=>'valor neto','required'])!!}
            </div>

             <div class="form-group">
                {!! Form::label('seguro','seguro')!!}
                {!! Form::text('seguro',null,['class'=>'form-control','placeholder'=>'seguro','required'])!!}
            </div>

             <div class="form-group">
                {!! Form::label('tipo remesa','tipo remesa')!!}
                {!! Form::select('tipo remesa',[''=>'','remesa'=>'remesa','remision'=>'remision'],'null',['class'=>'form-control remesa'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('forma pago','forma pago')!!}
                {!! Form::select('forma pago',[''=>'','contra_entrega'=>'contra entrega','contado'=>'contado'],'null',['class'=>'form-control pago'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('idtercero','remitente')!!}
                {!! Form::select('idtercero',$tercero,'null',['class'=>'form-control remitente',''=>'','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('origen','origen')!!}
                {!! Form::select('origen',$zona,null,['class'=>'form-control origen',''=>'','required'])!!}
            </div


            <div class="form-group">
                {!! Form::label('destino','destino')!!}
                {!! Form::select('destino',$zona1,null,['class'=>'form-control destino',''=>'','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        </div>
        {!! Form::close() !!}

@endsection

@section('js')

    <script >
        
        $(".pago").chosen({
            placeholder_text_single : 'Seleccione medio de pago'
        });

        $(".remitente").chosen({
            placeholder_text_single : 'Seleccione remitente'
        });

        $(".origen").chosen({
            placeholder_text_single : 'Seleccione origen'
        });

        $(".destino").chosen({
            placeholder_text_single : 'Seleccione remitente'
        });

         $(".remesa").chosen({
            placeholder_text_single : 'Seleccione remesa'
        });

        
    </script>

@endsection