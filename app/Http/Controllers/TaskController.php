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
        return Task::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation([
            'title' => 'required|string',
            'description' => 'required|string',
            'completed' => 'required|string',
            'due_date' => 'required|date',
        ]);
        $task = Task::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'completed' => $request['completed'],
            'due_date' => $request['due_date'],
        ]);
        return $task;
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
        $this->validation([
            'title' => 'required|string',
            'description' => 'required|string',
            'completed' => 'required|string',
            'description' => 'required|date',
            'due_date' => 'required|date',
        ]);
        Task::find($id)->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'completed' => $request['completed'],
            'due_date' => $request['due_date'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::find($id)->delete();
    }
}
