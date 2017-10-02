@extends('admin.template.main')


@section('title','Crear Usuario')


@section('content')
   
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)      <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
       {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
        .<div></div>
        <div class="form-group">
            {!! Form::label('name','name')!!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email','email')!!}
            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Example@gmail.com','required'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password','password')!!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'*********','required'])!!}
        </div>
        
         <div class="form-group">
            {!! Form::label('tipo','tipo')!!}
            {!! Form::select('tipo',[''=>'seleccione un nivel de usuario','admin'=>'administrador','operario'=>'operario','usuario'=>'usuario'],'null',['class'=>'form-control'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        </div>
        {!! Form::close() !!}

@endsection