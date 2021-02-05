<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoValidate;
use Illuminate\Http\Request;
use App\Models\Todo;



class TodoController extends Controller
{
    //
    public function create(TodoValidate $req){
        $req['user_id'] = auth()->id();
        Todo::create($req->all());
        return redirect('/todo')->with('message',"Todo created successfully");
    }
    public function index(){
        $todos = auth()->user()->todos->sortBy('completed');
        //$todos = Todo::orderBy('completed')->get();
        return view('index',compact('todos'));
    }

    public function edit(Todo $todo){
        return view('edit', compact('todo'));
    }

    public function update(TodoValidate $req,Todo $todo){
        $todo->update($req->all());
        return redirect('/')->with('message',"Todo Updated successfully");
    }

    public function complete(Todo $todo){
        $todo->update(['completed' =>true]);
        return redirect()->back();
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/')->with('message','Todo deleted successfully');
    }
}
