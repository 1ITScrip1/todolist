
@extends('layouts.app')

@section('content')

        <h1>Task nou</h1>
    @if($errors->any())
        <ul>
        <div class="alert alert-danger" role="alert">
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
                {{ Form::text('description', '', ['class' => 'form-control', 'placeholderd' => 'Adauga un continut task-ului']) }}
                </div>
            </div>
            

            <div class="form-group">

                 <button type="submit"class ="btn btn-primary">Creeaza un task nou </button>

            </div>
        </form>

@endsection