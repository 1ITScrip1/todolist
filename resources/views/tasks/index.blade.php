@extends('layouts.app')

@section('content')
<body>
    <h1>LISTA task-uri</h1>
    
    <div class="row">
        @foreach($tasks as $task)
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            @if($task->isCompleted())
                                <span class="badge text-bg-success">Finalizat</span>
                            @endif
                            {{$task->description}}
                        </h5>
                        <p class="card-text">
                            @if(!$task->isCompleted())
                                <form action="/tasks/{{$task->id}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <button class="btn btn-outline-warning btn-sm" input="submit">Finalizare task</button>
                                </form>
                            @else
                                <form action="/tasks/{{$task->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm" input="submit">Sterge</button>
                                </form>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-3">
    <div class="d-grid gap-2 col-6 mx-auto">
     <a href="/tasks/create" class="btn btn-primary btn-lg btn-block"> Task Nou </a>
</div>
</body>
@endsection