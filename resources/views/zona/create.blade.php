@extends('admin.template.main')


@section('title','Crear Zona')


@section('content')
   
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)      <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
       {!! Form::open(['route'=>'zona.store','method'=>'POST']) !!}
        .<div></div>

        <div class="form-group">
            {!! Form::label('zona','zona')!!}
            {!! Form::text('zona',null,['class'=>'form-control','placeholder'=>'Escriba zona','required'])!!}
        </div>
        

        <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection