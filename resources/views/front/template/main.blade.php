<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('Trumbo/dist/ui/trumbowyg.css')}}">
    <script src="{{asset('jquery/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('Trumbo/dist/trumbowyg.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
<div class="container-fluid">

    <nav class="navbar navbar-default">

        <ul class="nav navbar-nav navbar-left">
            <li>
                <form class="navbar-form" role="">
                    <a href="{{route('front.index')}}">
                        <button type="button" class="btn btn-info">
                            <span class="glyphicon glyphicon-home"></span>
                        </button>
                    </a>
                </form>
            </li>

            <li>
                <a href="{{route('admin.index')}}">Home</a>
            </li>

            <li>
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" >
                        <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </form>
            </li>

        </ul>

    </nav>






                @yield('content')
            </div>
        </body>
    <footer>

    </footer>

</html>