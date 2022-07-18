<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Publication, Files};

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

            if ($request->hasFile('photo')) {
                $files = new Files;
                $image = $request->file('photo');
                $files->name = time().'.'.$image->getClientOriginalExtension();
                $files->path = public_path('/images');
                $image->move($files->path, $files->name);
                $files->save();
            }
            $publication->save();

            return redirect('/')->with('success','Публикация создана.');
        }
        
        
        return view('create');
    }
}
