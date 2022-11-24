<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function get()
    {
        $items = item::all();
        return view('get', ['items' => $items]);
    }

    public function add()
    {
        return "";
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
