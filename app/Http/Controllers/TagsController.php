<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;
use Laracasts\Flash\Flash;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $tags = Tag::search($request->name)->orderBy('name','DESC')->paginate(3);
        return view('admin.tags.index')->with('tags',$tags);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {

        $tag = new Tag($request->all());
        $tag->save();

        Flash::success('El tag '.$tag->name. ' Ha Sido Creado Con Exito');
        return redirect()->route('tags.index');



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
        $tag =Tag::find($id);
        return view('admin.tags.edit')->with('tag',$tag);

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
        $tag = Tag::find($id);
        $tag ->fill($request->all());
        $tag ->save();

        Flash::warning('El Tag '. $tag->name. ' Ha Sido Editado');
        return redirect()->route('tags.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tag = Tag::find($id);
         $tag->delete();

         Flash::error('El tag '. $tag->name .' Ha Sido Eliminado');
         return redirect()->route('tags.index');


    }
}
