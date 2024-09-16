<?php

namespace App\Http\Controllers;

use App\Models\Task;
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
        $Tasks = Task::all();
        return response()->json($Tasks);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'end';
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'completed' => 'required|string',
            'due_date' => 'required|date',
        ]);
        $Task = Task::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'completed' => $request['completed'],
            'due_date' => $request['due_date'],
        ]);
        return response()->json($Task);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Task::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'completed' => 'required|string',
            'due_date' => 'required|date',
        ]);
        
        $task = Task::find($id)->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'completed' => $request['completed'],
            'due_date' => $request['due_date'],
        ]);
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id)->delete();
        return response()->json($task);
    }
}
