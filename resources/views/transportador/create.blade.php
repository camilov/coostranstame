@extends('admin.template.main')


@section('title','Crear transportador')


@section('content')
   
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)      <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

              
       {!! Form::open(['route'=>'transportador.store','method'=>'POST']) !!}

        <div class="form-group">
            {!! Form::label('cedula','cedula')!!}
            {!! Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Escriba Nro de Identificacion del transportador','required'])!!}
        </div>
        

       <div class="form-group">
            {!! Form::label('nombres','nombres')!!}
            {!! Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Escriba nombres','required'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('apellidos','apellidos')!!}
            {!! Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Escriba apellidos','required'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('telefono','telefono')!!}
            {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Escriba numero telefonico','required'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('direccion','direccion')!!}
            {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Escriba direccion','required'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection