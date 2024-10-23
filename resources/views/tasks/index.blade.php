
@extends('layouts.app')

@section('content')

<body>

<h1>LISTA task-uri</h1>
@foreach($tasks as $task)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$task->description}}</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-success">Finalizare task</a>

  </div>
</div>

@endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block"> Task Nou </a>

</body>

@endsection