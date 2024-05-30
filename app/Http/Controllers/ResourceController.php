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

    //CREATE
    public function create() {

        return view('comics.create');
    }

    //STORE
    public function store(Request $request) {

        $data = $request->all();
        
        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sales_date'];
        $new_comic->type = $data['type'];
        $new_comic->artists = $data['artists'];
        $new_comic->writers = $data['writers'];

        //dd($new_comic);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
        
    }
}
