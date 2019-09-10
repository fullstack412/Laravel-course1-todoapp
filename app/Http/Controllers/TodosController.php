<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    // fetch all todos from database

    //display them in the todos index page

    public function index()
    {

        return view('todos.index')->with('todos', Todo::all());
    }
}