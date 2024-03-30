<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

use App\Http\Resources\TaskCollection;

class TaskController extends Controller
{
    public function index(Request $request) {
      return new TaskCollection(Task::all());
    }
}
