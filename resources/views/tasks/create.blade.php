
@extends('layouts.app')

@section('content')

        <h1>Task nou</h1>
        <form method="POST" action="/tasks">
            <div class="form-group">
                @csrf
                <label for="description">Descrierea task-ului </label>
                <input class="form-comtrol" name="description" />

            </div>
            <div class="form-group">

                 <button type="submit"class ="btn btn-primary">Creeaza un task nou </button>

            </div>
        </form>

@endsection