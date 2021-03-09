@extends('layouts.app')

@section('content')

<div class="container">
    @php
        $no = 1;
    @endphp

   @foreach ($tasks as $task)
  {{ $no }} - {{ $task }} <br>
    <?php $no++ ?>
   @endforeach
</div>
    
@endsection