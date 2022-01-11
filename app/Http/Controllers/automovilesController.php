<?php

namespace App\Http\Controllers;

use App\Models\automoviles;
use Illuminate\Http\Request;

class automovilesController extends Controller
{
    //
    
    public function index()
    {
        return automoviles::all();
    }

    public function show(automoviles $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = automoviles::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, automoviles $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(automoviles $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
