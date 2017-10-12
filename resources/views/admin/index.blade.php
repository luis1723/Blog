@extends('admin.template.main')

@section('title', 'Lista De Usuarios')

@section('content')

    <table class="table">

        <thead>

        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Accion</th>

        </thead>

        <tbody>

        @foreach($users as $user)

            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->type == 'admin')
                        <span class="label label-info">{{$user->type}}</span>

                        @else

                        <span class="label label-primary">{{$user->type}}</span>

                        @endif
                </td>
                <td>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                    <a href="{{route('users.destroy',$user->id)}}" onclick="return confirm('¿Seguro Que Quieres Eliminarlo?')" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

                        </td>

            </tr>

        @endforeach

        </tbody>


    </table>

    <div class="form-control">

    {!! $users->render()!!}

    </div>


    <div class="form-group pull-right">

    <a href="{{route('users.create')}}" class="btn btn-primary" >Registrar Usuario</a>

    </div>
@endsection