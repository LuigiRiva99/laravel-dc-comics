<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    //INDEX
    public function index() {

        $comics = Comic::all();

        return view('comics.index',compact ('comics'));
    }

    //SHOW
    public function show(Comic $comic) {

        return view('comics.show',compact ('comic'));
    }
}
