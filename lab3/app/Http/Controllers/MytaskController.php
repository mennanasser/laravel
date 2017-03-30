<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Task;

use Illuminate\Support\Facades\Auth;

class MytaskController extends Controller
{
    public function __construct()
	{
    $this->middleware('auth');
	}


    public function add()
    {	
    	return view ("task");
    }


    public function display(){
	 //   $tasks =  Task::all(); 
	    $tasks = DB::table('tasks')->where('user_id', Auth::id())->get(); //cz auth
     	return view('myResult')->with('tasks', $tasks);
    }

      public function store (Request $request)
    {
    	//dd($request->all());
        $result = $request->get('myInp');  
        //return $result;

//query builder
     // return DB::table("tasks")->get(); 

//ORM
        //return $tasks= task::all();  
		
//validate of task 
         $this->validate($request,[
         		"myInp"=>'required|min:5|max:20'
         	]);
//insert
        $task=new Task; 
     	$task->title=$result;
     	$task->user_id=Auth::id();   //cz auth
     	$task->save();
     	return redirect("/myResult");

    }

    public function delete($id){
    	//dd($id);
    	$task=Task::find($id);
		//return $task;   	
    	$task->delete(); 
		return redirect("/myResult");
	
    }
    public function update($id){
    	$task=Task::find($id);
    	return view("updated",compact('task'));

    }

    public function donee(Request $request){
    	$task=Task::find($request->id);
    	$task->title = $request->input("myInp");
    	$task->save();

    	return redirect("/myResult");
    }
}