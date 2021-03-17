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
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}">
                {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="3" class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}"></textarea>
                    {!! $errors->first('description', '<span class="invalid-feedback">:message</span>')!!}
            </div> 
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        </div>

        <div class="col-md-6">
            <h1>All Task</h1>
            <hr>
            <ol style="margin-left: -20px">
                @foreach ($tasks as $task)
                    <li>
                        <a href="/tasks/{{$task->id}}">{{ $task ->title}}</a>
                    </li>
                @endforeach
            </ol>
        </div>

    </div>
 

</div>
    
@endsection