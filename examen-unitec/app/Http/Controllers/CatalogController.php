<?php

namespace App\Http\Controllers;
use App\Movie;

class CatalogController extends Controller
{

    public function getIndex()
    {
        $movies = Movie::all();
        return view('catalog.index', array('arrayPeliculas' => $movies));
    }
    public function getShow($id)
    {

        $miPeli = Movie::findOrFail($id);
        return view('catalog.show', array('miPeli' => $miPeli));
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
        $miPeli = Movie::findOrFail($id);
        return view('catalog.edit', array('miPeli' => $miPeli));
    }
}
