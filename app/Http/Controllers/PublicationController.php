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
}
