<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::all();
        return view ('home', ['task'=>$task]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task=Task::create($request->all());
        $event_id=$task->id;
        return redirect("show/$task->id");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\SeguimientoTarea  $seguimientoTarea
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        
        return view('show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeguimientoTarea  $seguimientoTarea
     * @return \Illuminate\Http\Response
     */
    public function edit(SeguimientoTarea $seguimientoTarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeguimientoTarea  $seguimientoTarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeguimientoTarea $seguimientoTarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeguimientoTarea  $seguimientoTarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeguimientoTarea $seguimientoTarea)
    {
        //
    }
}
