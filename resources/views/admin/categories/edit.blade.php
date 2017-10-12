@extends('admin.template.main')

@section('title','Editar Categoria '. $category->name )

@section('content')


    {!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT']) !!}



    <div class="form-group">

        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $category->name ,['class' =>'form-control','placeholder' =>'Nombre Completo De La Categoria','required']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Cambiar',['class'=> 'btn btn-primary']) !!}

    </div>

    {!! Form::close () !!}


@endsection