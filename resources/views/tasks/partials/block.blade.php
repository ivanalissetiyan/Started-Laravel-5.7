@if ($tasks->count())

    <h1>All Task</h1>
    <hr>
    <ol style="margin-left: -20px">
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{$task->id}}">{{ $task ->title}}</a>
        </li>
    @endforeach
    </ol>

@else
    <div class="alert alert-info">Data Task Kosong !!!</div>

@endif