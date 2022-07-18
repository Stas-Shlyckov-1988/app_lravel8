<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Publication, Files};
use Illuminate\Support\Facades\DB;

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

            if ($request->hasFile('photo')) {
                
                $images = $request->file('photo');
                foreach($images as $image) {
                    $files = new Files;
                    $files->name = time().'.'.$image->getClientOriginalExtension();
                    $files->path = '/images/';
                    $image->move(public_path('/images'), $files->name);
                    $files->save();
                    DB::table('pub_files')->insert([
                        'file_id' => $files->id,
                        'publication_id' => $publication->id,
                    ]);
                }
                
            }
            

            return redirect('/')->with('success','Публикация создана.');
        }
        
        
        return view('create');
    }
}
