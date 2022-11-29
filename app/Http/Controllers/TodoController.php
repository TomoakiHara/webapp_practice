<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function get()
    {
        $items = Item::all();
        return view('index', ['items' => $items]);
    }

    public function add(TodoRequest $request)
    {
        // ddd($request);
        $form = $request->all();
        // dd($form);
        Item::create($form);
        return redirect('/');
    }

    public function edit(TodoRequest $request)
    {
        $form = $request->all();
        // dd($form);
        unset($form['_token']);
        Item::where('id', $request->id)->update ($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Item::where('id', $request->id)->delete($form);
        return redirect('/');
    }
}
