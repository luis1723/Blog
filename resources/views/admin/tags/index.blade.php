@extends('admin.template.main')

@section('title','Lista De Tags')


@section('content')

    <!-- Buscador-->


    {!! Form::open(['route' => 'tags.index','method' => 'GET', 'class' => 'navbar-form pull right'])  !!}

    <div class="form-group">

        {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' =>'Buscar Tag', 'required' ]) !!}
        <span class="input-group" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>

    </div>

    {!! Form::close()!!}


    <!-- Fin-->


    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
        </thead>
        <tbody>

        @foreach($tags as $tag )
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>
                <td>
                    <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                    <a href="{{route('admin.tags.destroy', $tag->id)}}" onclick="return confirm('¿Seguro Que Quieres Eliminarlo?')" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                </td>
            </tr>
        @endforeach

        </tbody>


    </table>

    <div class="form-horizontal">

        {!! $tags->render()!!}

    </div>


    <a href="{{route('tags.create')}}" class="btn btn-primary pull-right">Registrar Tags</a>



@endsection