<?php

namespace App\Http\Controllers;
use App\Task;
use App\subject1;
use App\Http\Requests\taskRequest;
use Illuminate\Http\Request;


class taskController extends Controller
{
    public function index()
    {
      
      $tasks = Task::all();
      $subject1s = subject1::all();
   
      return view('tasks.index', compact('tasks', 'subject1s'));
    }

    public function store(taskRequest $request)
    {

     Task::create($request->all());
     return back()->with('success', 'Data Telah Berhasil Diinput');
     

    }

    public function show(Task $task)
    {
      
      return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $subject1s = subject1::all();
        return view('tasks.edit', compact('task', 'subject1s'));
    }

    public function update(Task $task, taskRequest $request)
    {

      $task->update($request->all());

      return redirect("/tasks/{$task->id}")->with('success', 'Data Telah Berhasil Update');
    

    }

    public function delete(Task $task)
    {
      $task->delete();
      return redirect("/tasks")->with('success', "Data telah berhasil di hapus");
    }


}
