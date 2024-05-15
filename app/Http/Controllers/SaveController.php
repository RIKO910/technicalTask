<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textbox;

class SaveController extends Controller
{
    public function index()
    {
        return view('save.index');
    }

    public function save(Request $request)
    {
        Textbox::create([
            'selected_count'=> $request->selected_count,
        ]);
        // Save the selected checkboxes count to the database
        // $count = $request->input('selected_count');
        return redirect()->route('index');
        // Save $count to the database using Eloquent ORM or Query Builder
    }
}
