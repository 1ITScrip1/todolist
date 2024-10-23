
@extends('layouts.app')

@section('content')

<body>

<h1>LISTA task-uri</h1>

 @foreach($tasks as $task)       

        <div class="card @if($task->isCompleted()) border-success @endif " style="width: 18rem;">
        <div class="card-body">
        <h5>
            @if($task->isCompleted())
            <span class="badge text-bg-success">Finalizat</span>

            @endif {{$task->description}}</h5>
            <p class="card-text"></p>
                <form action="/tasks/{{$task->id}}" method="POST">
                @method('PATCH')
                @csrf
                @if(!$task->isCompleted())
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-warning btn-sm" input="submit">Finalizare task</button>
                    </div>
                @endif
                </form>
    </div>
 </div>
     @endforeach


<div class="d-grid gap-2 col-6 mx-auto">
     <a href="/tasks/create" class="btn btn-primary btn-lg btn-block"> Task Nou </a>
</div>
</body>

@endsection