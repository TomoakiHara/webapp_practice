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
        $form = $request->todo();
        Item::create($form);
        return redirect('/');
    }

    public function edit()
    {
        return "";
    }

    public function delete()
    {
        return "";
    }
}
