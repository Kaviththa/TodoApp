<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\http\requests\TodoCreateRequest;
use App\Todo;
use App\User;
use Storage;

class TodoController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index(){
        
        $todos = auth()->user()->todos()->orderBy('completed')->get();
       //
        
        //return $todos; 
       // $todos = Todo::orderBy('completed')->get();


        //return view('todos.index')->with(['todos'=>$todos]);
        //instead of with() u can simply use compact() here no need $todos=todos
        return view('todos.index', compact('todos'));
    }

    public function create(){
        return view('todos.create');
    }

    public function store( TodoCreateRequest $request ){
    
      //dd(auth()->user()->todos());
      auth()->user()->todos()->create($request->all());
      //$userId = (auth()->id());
      //$request['user_id'] = $userId;
      //Todo::create($request->all());
      return redirect(route('todo.index'))->with('message','Todo created successfully!');
    }

    public function edit( Todo $todo){
        //$todo = Todo::find($id);
       
        
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo){

        $todo->update(['title'=> $request->title]);

        return redirect(route('todo.index'))->with('message','Todo updated successfully!');

    }
   public function complete(Todo $todo)
   {
       $todo->update(['completed'=>true]);
       return redirect()->back()->with('message','Todo completed successfully!');
   }

   public function incomplete(Todo $todo)
   {
       $todo->update(['completed'=>false]);
       return redirect()->back()->with('message','Todo incomplete successfully!');
   }

   public function destroy( Todo $todo){

    $todo->delete();

    return redirect(route('todo.index'))->with('message',"$todo->title delete successfully!");
   }
}
