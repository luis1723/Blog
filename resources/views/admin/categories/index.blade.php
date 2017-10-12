@extends('admin.template.main')


@section('title', 'Lista De Categorias')


@section('content')



    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>
        </thead>
        <tbody>

        @foreach($categories as $category )
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                <a href="{{route('admin.categories.destroy', $category->id)}}" onclick="return confirm('¿Seguro Que Quieres Eliminarlo?')" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                </td>
            </tr>
            @endforeach

        </tbody>


    </table>

    <div class="form-horizontal">

        {!! $categories->render()!!}

    </div>


    <a href="{{route('categories.create')}}" class="btn btn-primary pull-right">Registrar Categoria</a>



@endsection
