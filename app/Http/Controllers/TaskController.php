<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Tag;

class TaskController extends Controller
{
        public function move_todopage()
        {
            return redirect('/dashboard');
        }   

        // public function search(Request $request)
        // {
        //     $form = $request->all();
        //     // dd($form);
        //     unset($form['_token']);
        //     Item::where('todo','tag_id', $request->todo, tag_id)->get;
        // }
    // public function edit(TodoRequest $request)
    // {
    //     $form = $request->all();
    //     // dd($form);
    //     unset($form['_token']);
    //     Item::where('id', $request->id)->update ($form);
    //     return redirect('/search');
    // }
    // public function delete(Request $request)
    // {
    //     $form = $request->all();
    //     unset($form['_token']);
    //     Item::where('id', $request->id)->delete($form);
    //     return redirect('/search');
    // }
}
