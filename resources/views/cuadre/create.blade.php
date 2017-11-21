@extends('admin.template.main')


@section('title','Cierre de zonas')


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
      
       {!! Form::open(['route'=>'cuadre.store','method'=>'POST']) !!}
        
            
            <div class="form-group">
                {!! Form::label('fecha inicial','fecha inicial: ')!!}
                {!! Form::date('fechainicial',$dt1)!!}
            </div>
            
            <div class="form-group">
                {!! Form::label('fecha final','fecha final: ')!!}
                {!! Form::date('fechafinal',$dt1)!!}
            </div>
             <div class="form-group">
                {!! Form::label('idzona','zona')!!}
                {!! Form::select('idzona',$zona,null,['class'=>'form-control','placeholder'=>'Selecciona zona que desea cerrar','required'])!!}
            </div>
      
            <div class="form-group">
                {!! Form::submit('Cargar',['class'=>'btn btn-primary'])!!}
            
        </div>
        {!! Form::close() !!}

@endsection