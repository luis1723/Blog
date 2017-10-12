@extends('front.template.main')

@section('title', 'Pagina Principal ')

@section('content')



    <div class="container-fluid">
        <h1 class="title-front text-center">Ultimos Articulos</h1>
        <div class="row">
            <br>

            @foreach ($articles as $article)
                <div class="col-md-3">

                        <div class="panel panel-info">
                            <div class="panel-body">

                                @foreach ($article->images as $image)
                                    <img class="img-responsive img-rounded" src="/images/articles/{{$image->name}}" alt="">
                                @endforeach
                            </div>

                            <ul class="list-group">
                                <a href="{{route('front.view.article', $article->id)}} ">
                                     <div style="text-align: center;" class="panel-heading">{{$article->title}}

                                    </div>
                                </a>
                                <li class="list-group-item">
                                    <div class="wel" style="text-align: center">
                                        <span class="glyphicon glyphicon-time"></span>
                                        {{$article->created_at->diffForHumans()}}
                                    </div>

                                    <div class="wel" style="text-align: center">
                                        <a href=""{{route('front.search.category',$article->category->name)}}>{{$article->category->name}}</a>
                                        <span class="glyphicon glyphicon-folder-open"></span>


                                    </div>
                                </li>
                            </ul>
                        </div>

                </div>
            @endforeach

            <div class="col-md-4 aside">

                @include('front.template.aside')

            </div>

        </div>

    </div>

    <div class="text-center">

        {!! $articles->render()!!}

    </div>



@endsection