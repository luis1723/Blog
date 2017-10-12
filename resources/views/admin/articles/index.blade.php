@extends('admin.template.main')

@section('title','Lista De Articulos')

@section('content')

    <!-- Buscador-->


    {!! Form::open(['route' => 'articles.index','method' => 'GET', 'class' => 'navbar-form pull right'])  !!}

    <div class="form-group">

        {!! Form::text('title',null,['class'=> 'form-control', 'placeholder' =>'Buscar Articulo', 'required' ]) !!}
        <span class="input-group" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>

    </div>

    {!! Form::close()!!}


    <!-- Fin-->


    <table class="table table-striped">

        <thead>

        <th>ID</th>
        <th>Titulo</th>
        <th>Categoria</th>
        <th>Usuario</th>
        <th>Accion</th>

        </thead>

        <tbody>

        @foreach($articles as $article)

            <tr>

                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->category->name}}</td>
                <td>{{$article->user->name}}</td>
                <td>
                    <a href="{{route('articles.edit',$article->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                    <a href="{{route('admin.articles.destroy',$article->id)}}" onclick="return confirm('¿Seguro Que Quieres Eliminarlo?')" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

    <div class="form-horizontal">

        {!! $articles->render()!!}

    </div>


    <div class="form-group pull-right">

        <a href="{{route('articles.create')}}" class="btn btn-primary" >Registrar Articulo</a>

    </div>



@endsection