@extends('layouts.app')
@section('title', 'All Tasks')
@section('content')

<div class="container">
    

    
    <div class="row">
        <div class="col-md-6">
            <h1>Create All Task</h1>
            <hr>           
 

            <form action="/tasks" method="post" autocomplete="off">
                @csrf
                @include('tasks.partials.form', [
                    'task' => new App\Task,
                    'submit_button' => "Save"
                ])
           
        </form>
        </div>

        <div class="col-md-6">
           @include('tasks.partials.block')
        </div>

    </div>
 

</div>
    
@endsection