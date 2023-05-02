<?php

namespace App\Http\Controllers;

use App\Models\Listify;
use Illuminate\Http\Request;

class ListifyController extends Controller
{
    public function index(){

        $data = listify::all();
        return view('todolist', compact('data'));
    }

    public function addtodo(){

        $data = listify::all();
        return view('addtodo');
    }

    public function inserttodo(Request $request){

        // dd($request->all());
        Listify::create($request->all());
        return redirect()->route('todolist')->with('success', 'Your Todo List Success Added');
    }

    public function showtodo($id){

        $data = Listify::find($id);
        // dd($data);
        return view('showtodo', compact('data'));
    }

    public function updatetodo(Request $request, $id){

        $data = Listify::find($id);
        $data->update($request->all());
        // dd($data);
        return redirect()->route('todolist')->with('success', 'Your Todo List Successfully Updated');
    }

    public function deletetodo(Request $request, $id){

        $data = Listify::find($id);
        $data->delete();
        // dd($data);
        return redirect()->route('todolist')->with('success', 'Your Todo List Successfully Deleted');
    }


}
