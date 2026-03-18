<?php

namespace App\Http\Controllers;

use App\Models\GameGenre;
use App\Models\GameGenreId;
use Illuminate\Http\Request;

class GameGenreController extends Controller
{
    public function index(){
        return GameGenre::all();
    }
    public function show(GameGenre $id){
        return $id;
    }
    public function store(Request $request){
        return GameGenre::create($request->all());
    }
    public function update(Request $request, GameGenre $id){
        $id->update($request->all());
        return $id;
    }
    public function destroy(GameGenre $id){
        $id->delete();
        return "deleted";
    }


}
