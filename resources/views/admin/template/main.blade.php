<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Default')| Panel De Administracion </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{asset('jquery/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
    <script src="{{asset('chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('Trumbo/dist/trumbowyg.js')}}"></script>
    <link rel="stylesheet" href="{{asset('Trumbo/dist/ui/trumbowyg.css')}}">



</head>
<body class="container-fluid">

    @include('admin.template.nav')

    <section>
        @include('admin.template.errors')
        @include('flash::message')
        <div class="panel-heading">
        <h1>@yield('title')</h1>
        </div>

    </section>


        <div class="jumbotron">
        @yield('content')
        </div>

    <footer>

        <div class="panel panel-footer">

            <strong>Todos Los Derechos Reservados CCEO.</strong>

        </div>

    </footer>

    </section>

    @yield('js')

</body>
</html>