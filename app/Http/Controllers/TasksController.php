<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){

        $tasks = Task::orderBy('id','DESC')->get();

    
        return view('tasks.index', 
    [
        'tasks'=>$tasks,
    ]);

    }

    public function create(){
        return view('tasks.create');
    }

    public function store()
    {
        $task = Task::create([
            'description'=> request('description'),
        ]);



     /*   $this->validate($request,[
            'description'=>'required',
            
          ]);

          $task = new task;
          $task->description=$request->input('description');
          $task->save();
          */
        return redirect ('/');
    }
}
