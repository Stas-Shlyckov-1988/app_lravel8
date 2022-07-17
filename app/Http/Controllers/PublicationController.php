<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    //
    public function index() {
        
        return view('welcome', [
            'publication' => Publication::all(),
        ]);
    }

    public function create(Request $request) {

        if ($request->isMethod('post'))
        {
            $publication = new Publication;
            $publication->title = $request->input('title');
            $publication->description = $request->input('description');
            $publication->price = $request->input('price');
            $publication->save();

            return redirect('/');
        }
        
        
        return view('create');
    }
}
