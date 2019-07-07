<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TaskController extends Controller
{
    public function index(){
        return Tasks::all();
    }

    public function show($id){
        return Tasks::find($id);
    }
}
