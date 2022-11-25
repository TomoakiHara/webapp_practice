<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function get(Request $request)
    {
        $items = item::all();
        return view('index', ['items' => $items]);
    }

    public function add()
    {
        $form = $request->all();
        item::create($form);
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
