<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index() {

        $comics = Comic::all();

        return view('comics.index',compact ('comics'));
    }
}
