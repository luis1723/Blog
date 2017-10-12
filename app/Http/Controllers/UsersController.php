<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;


class UsersController extends Controller
{

    public function index(){

       $users = User::orderBy('id','ASC')->paginate(4);

       return view('admin.index')->with('users', $users);



    }


    public function  create(){

       return view('admin.userscreate');

    }



    public function  store(UserRequest $request){

        $user = new User($request->all());
        $user->password =bcrypt($request->password);
        $user->save();

        Flash::success("Se Ha Registrado ". $user->name . " De Forma Exitosa");

        return redirect()->route('users.index');


    }


    public function edit($id){

        $user = User::find ($id);


        return view('admin.edit')->with('user',$user);


    }

    public function update(Request $request,$id){

            $user = User::find($id);
            $user->name  = $request->name;
            $user->email = $request->email;
            $user->type  = $request->type;
            $user->save();

            Flash::warning("El Usuario ". $user->name. " Ha Sido Editado Con Exito" );

            return redirect()->route('users.index');

    }


    public function destroy($id){

        $user = User::find ($id);
        $user->delete();

        Flash::error("El Usuario ". $user->name . "  A Sido Borrado De Forma Exitosa");

        return redirect()->route('users.index');

    }





}
