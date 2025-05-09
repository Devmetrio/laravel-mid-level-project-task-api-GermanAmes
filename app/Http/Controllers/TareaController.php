<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasktRequest;
use App\Http\Requests\UpdateTasktRequest;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
        public function index(){
        return Tarea::all();
    }

    public function store(StoreTasktRequest $request){
        $task = Tarea::create($request->validated());
        return response()->json($task, 201);
    }

    public function show(Tarea $task){
        return $task;
    }

    public function update(UpdateTasktRequest $request){
        $task = Tarea::update($request->validated());
        return $task;
    }

    public function destroy(Tarea $task){
        $task->delete();
        return response()->noContent();
    }
}
