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

     $task = request()->validate([
       'title' => 'required|min:3',
       'description' => 'required',
     ]);


     Task::create($task);
     return back()->with('success', 'Data Telah Berhasil Diinput');
     

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

     $attributes = request()->validate([
        'title' => 'required|min:3',
        'description' => 'required',
      ]);

      $task->update($attributes);

      return redirect("/tasks/{$task->id}")->with('success', 'Data Telah Berhasil Update');
    

    }


}
