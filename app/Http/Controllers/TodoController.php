<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('home', compact('todos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todo::create($data);
        return back();
    }


public function delete($id){
        $todos = Todo::find($id);
        $todos->delete();
        return redirect()->back();
}

    // public function destroy(Todo $todos)
    // {
    //     // dump($todos);
    //     $todos->delete();
    //     return back();
    // }
}
