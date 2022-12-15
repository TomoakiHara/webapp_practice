<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function register()
    {
        return redirect('/register');
    }
    
    public function get()
    {
        $user = Auth::user();
        $items = Item::all();
        // $tags = Tag::all();
        // $param = ['items' => $items, 'tags' => $tags, 'user' =>$user];
        $param = ['items' => $items, 'user' =>$user];
        return view('index', $param);
    }

    public function logout()
    {
        return redirect('/login');
    }

    public function add(TodoRequest $request)
    {
        // ddd($request);
        $form = $request->all();
        // dd($form);
        Item::create($form);
        return redirect('/dashboard');
    }

    public function edit(TodoRequest $request)
    {
        $form = $request->all();
        // dd($form);
        unset($form['_token']);
        Item::where('id', $request->id)->update ($form);
        return redirect('/dashboard');
    }

    public function delete(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Item::where('id', $request->id)->delete($form);
        return redirect('/dashboard');
    }

        public function move_taskpage()
    {
        $user = Auth::user();
        $items = Item::all();
        $param = ['items' => $items, 'user' =>$user];
        return view('task', $param);
    }

    public function move_todopage()
    {
        return redirect('/dashboard');
    }
}
