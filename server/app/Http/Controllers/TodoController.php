<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
// use App\Models\Todo;

class TodoController extends Controller
{
    public function getTodos() {
      $todos = Todo::all();
      return $todos;
    }

    public function addTodo(Request $request) {
      $todo = new Todo;
      $todo->todo = $request->todo;
      $todo->save();

      $todos = Todo::all();
      return $todos;
    }
}
