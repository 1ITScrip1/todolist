
@extends('layouts.app')

@section('content')

        <h1>Creeaza un task nou</h1>
    @if($errors->any())
        <ul>
        <div class="alert alert-warning" role="alert">
            @foreach($errors->all() as $error)

                <li> {{$error}} </li>

            @endforeach
            </div>
        </ul>
    @endif


        <form method="POST" action="/tasks">
            <div class="form-group">
                @csrf
                <div>
                {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Adauga un continut task-ului']) }}
                </div>
            </div>


            <div class="form-group">
            <div class="row mt-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                 <button type="submit"class ="btn btn-primary">Creeaza un task nou </button>
            </div>
            </div>
            </div>
        </form>

@endsection
