<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todos;

class TodosController extends Controller
{
    //
    public function getTodos(){
        $todos = Todos::all();
        return response()->json(array ('result' => $todos));
    }

    public function store(){
        $todos = new Todos();
        $todos->
    }
}
