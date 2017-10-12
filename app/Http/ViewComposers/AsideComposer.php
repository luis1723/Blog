<?php

namespace App\Http\ViewComposers;

use App\Category;
use App\Tag;
use Illuminate\Contracts\View\View;


class AsideComposer{

    public function compose(View $view){

        $categories = Category::orderBy('name', 'DESC')->get();
        $tags = Tag::orderBy('name', 'DESC')->get();

        $view->with('categories',$categories)->with('tags', $tags);


    }

}