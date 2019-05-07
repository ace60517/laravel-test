<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();

        // dd($todos);

        return view('todo.index',[
            'todos' => $todos,
            // 'User' => User::all()
        ]);
    }
    public function update(Request $request){
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->save();

        // $todo = Todo::create([
        //     'title' => $request->title,
        // ]);

        $todo = Todo::create($request->all());
        return redirect('/todo');
    }

    public function destroy(Request $request, Todo $todos){
        $todos->delete();
        return redirect('/todo');
    }
}
