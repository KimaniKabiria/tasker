<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'due' => 'required',
            'category' => 'required',
            'department' => 'required',
        ]);

        auth()->user()->tasks()->create($data);

        return redirect('/home/'.auth()->user()->id);
    }

    public function show(\App\Tasks $tasks){
        return view('tasks.show', compact('tasks'));
    }
}
