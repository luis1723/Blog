<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel title">Categorias</h3>
    </div>

    <div class="panel-body">
        <ul class="list-group">

            @foreach($categories as $category)

                <li class="list-group-item ">

                    <a href="{{route('front.search.category',$category->name)}}">
                        {{$category->name}}
                    </a>
                    <span class="badge">{{$category->articles->count() }}</span>

                </li>

            @endforeach



        </ul>
    </div>
</div>


<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel title">Tags</h3>
    </div>

    <div class="panel-body">

        @foreach($tags as $tag)
            <a href="{{route('front.search.tag',$tag->name)}}">
                <span class="label label-default">{{$tag->name}}</span>
            </a>
        @endforeach
    </div>
</div>

