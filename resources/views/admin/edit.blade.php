@extends('admin.template.main')

@section('title','Editar Usuario '. $user->name )

@section('content')


    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}



    <div class="form-group">

        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $user->name ,['class' =>'form-control','placeholder' =>'Nombre Completo','required']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('email','Correo Electonico') !!}
        {!! Form::email('email',$user->email ,['class' =>'form-control','placeholder' =>'example@gmail.com','required']) !!}

    </div>


    <div class="form-group">

        {!! Form::label('type','Tipo') !!}
        {!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'],null,['class' =>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Cambiar',['class'=> 'btn btn-primary']) !!}

    </div>

    {!! Form::close () !!}


@endsection