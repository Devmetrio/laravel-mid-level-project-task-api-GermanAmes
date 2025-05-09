<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{

/** @OA\Get(
 *     path="/proyectos",
 *     summary="Get a list of proyectos",
 *     tags={"Proyectos"},
 *     @SWG\Response(response=200, description="Successful operation"),
 *     @SWG\Response(response=400, description="Invalid request")
 * )
 */
    public function index(){
        $proyectos = Proyecto::all();
        return response()->json($proyectos, 200);
    }

    public function store(StoreProjectRequest $request){
        $proyecto = Proyecto::create($request->validated());
        return response()->json($proyecto, 201);
    }

    public function show(Proyecto $proyecto){
        return $proyecto;
    }

    public function update(UpdateProjectRequest $request){
        $proyecto = Proyecto::update($request->validated());
        return $proyecto;
    }

    public function destroy(Proyecto $proyecto){
        $proyecto->delete();
        return response()->noContent();
    }
}
