<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Item;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function move_todopage()
    {
        return redirect('/dashboard');
    }   

    public function search(Request $request)
    {
        $user = Auth::user();
        $tags = Tag::all();
        $keyword = $request -> input('keyword','');
        $searchs = Item::where('todo', $request->todo)->orWhere('tag_id', $request->tag_id)->get();
        // dd($request);
        $param = [
        'searchs' => $searchs,
        'keyword' => $keyword,
        'user' => $user,
        'tags' => $tags
        ];
        // dd($param);
        return view('task',$param);
    }

    public function edit(TodoRequest $request)
    {
        $form = $request->all();
        // dd($form);
        unset($form['_token']);
        Item::where('id', $request->id)->update ($form);
        // return redirect('/move_taskpage');
        // return redirect('/search');
        return back();
    }
    public function delete(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Item::where('id', $request->id)->delete($form);
        return back();
    }
}
