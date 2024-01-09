<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\todos;
use Illuminate\Support\Facades\Redirect;

class todosController extends Controller
{ 

    public function index(){
        $todosData = todos::all();
        $data= compact('todosData');
        return view('welcome')->with($data);
    }

    public function store(Request $request){
        //print_r($request->all());
        $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'date' => 'required'
            ] );
           // echo "validation complete!";

        #database o data pass
        $todo = new todos;
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->date=$request['date'];
 
        $todo->save();

        #data create kore add korar por home page e jabe
        return Redirect(route('todo.home'));
    }

    public function delete($id){
        todos::find($id)->delete();
       #data delete kore add korar por home page e jabe
       return Redirect(route('todo.home'));
    }
}