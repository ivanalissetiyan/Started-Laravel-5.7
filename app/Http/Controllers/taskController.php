<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;


class taskController extends Controller
{
    public function index()
    {
      $tasks = Task::all();
      return view('tasks.index', compact('tasks'));
    }

    public function store()
    {

     request()->validate([
       'title' => 'required|min:3',
       'description' => 'required',
     ]);

     $task = request()->all();
     Task::create($task);
     return back();

    }

    public function show(Task $task)
    {
      
      return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {

      request()->validate([
        'title' => 'required|min:3',
        'description' => 'required',
      ]);

      $task->update([
          'title' => request('title'),
          'description' => request('description'),
      ]);

      return redirect("/tasks/{$task->id}");
    

    }


}
