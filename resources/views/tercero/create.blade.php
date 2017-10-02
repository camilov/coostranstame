@extends('admin.template.main')


@section('title','Crear tercero')


@section('content')
   
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)      <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
       {!! Form::open(['route'=>'tercero.store','method'=>'POST']) !!}

        <div class="form-group">
            {!! Form::label('cedula','cedula')!!}
            {!! Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Escriba su Nro de Identificacion','required'])!!}
        </div>
        

       <div class="form-group">
            {!! Form::label('ciudad','ciudad')!!}
            {!! Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'Ciudad','required'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('nombre','nombre')!!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('apellido','apellido')!!}
            {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellidos','required'])!!}
        </div>
<!--        
         <div class="form-group">
            {!! Form::label('idusuario','idusuario')!!}
            {!! Form::text('idusuario',null,['class'=>'form-control','placeholder'=>'idusuario','required'])!!}
        </div>


    -->

        <div class="form-group">
            {!! Form::label('nit','nit')!!}
            {!! Form::text('nit',null,['class'=>'form-control','placeholder'=>'Escriba nit','required'])!!}
        </div>



        <div class="form-group">
            {!! Form::label('direccion','direccion')!!}
            {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Escriba direccion','required'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('celular','celular')!!}
            {!! Form::text('cedlular',null,['class'=>'form-control','placeholder'=>'Escriba celular','required'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('correo','correo')!!}
            {!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'Escriba correo','required'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection