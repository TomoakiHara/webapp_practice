<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function get()
    {
        $items = Item::all();
        return view('index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        // ddd($request);
        $form = $request->all();
        Item::create($form);
        return redirect('/');
    }

    public function edit(Request $request)
    {
        // dd($request);
        $form = $request->all();
        // dd($request->all());
        // dd($form);
        unset($form['_token']);
        Item::where('id', $request->input)->update ($form);
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
