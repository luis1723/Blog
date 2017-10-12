<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        Carbon::setLocale('es');

    }

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(2);
        $articles->each(function ($articles){

            $articles->category;

        });


        return view('front.index')->with('articles', $articles);


    }

    public function SearchCategory($name){

        $category= Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(2);
        $articles->each(function ($articles){
            $articles->category;
            $articles->images;

        });
        return view('front.index')->with('articles',$articles);
    }


    public function searchTag($name)
    {
        $tag = Tag::searchTag($name)->first();

        $articles = $tag->articles()->paginate(2);
        $articles->each(function ($articles){
           $articles->cateogry;
           $articles->images;
        });
        return view('front.index')->with('articles', $articles);

    }

    public function viewArticle($id){

        $article = Article::where('id','=',$id)->firstOrFail();
        $article->category;
        $article->user;
        $article->tags;
        $article->images;

        return view('front.article')->with('article', $article);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
