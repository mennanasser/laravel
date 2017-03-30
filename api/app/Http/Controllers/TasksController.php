<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use DB;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $tasks=Task::all();
        // $tasks = DB::table('tasks')->where('user_id', Auth::id())->get();
        // return view("tasks/index",compact("tasks"));
         return response()->json(['tasks'=>$tasks],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        // return view("tasks/new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task=new Task;
        $task->title=$request->input('myInp');
        //    $task->user_id=Auth::id();//cz auth
        $task->save();
         // return redirect('/tasks');
        return response()->json(['task'=>$task],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task=Task::find($id);
        // return view("tasks/show",compact("task"));
        return response()->json(['task'=>$task],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::find($id);
        // return view("tasks/edit",compact("task"));
        return response()->json(['task'=>$task],200);
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
		$task=Task::find($id);
        $task->title=$request->input('myInp');
        $task->save();
         // return redirect('/tasks');
        return response()->json(['task'=>$task],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Task::find($id);
        $task->delete();
         // return redirect('/tasks');
        return response()->json(['task'=>$task]);
    }
}
