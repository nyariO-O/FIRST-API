<?php

namespace App\Http\Controllers;

use App\Models\GameGenre;
use App\Models\GameGenreId;
use Illuminate\Http\Request;

class GameGenreIdController extends Controller
{
    public function index(){
        return GameGenreId::all();
    }
    public function show(GameGenreId $id){
        return $id;
    }
    public function store(Request $request){
        return GameGenreId::create($request->all());
    }
    public function update(Request $request, GameGenreId $id){
        $id->update($request->all());
        return $id;
    }
    public function destroy(GameGenreId $id){
        $id->delete();
        return "deleted";
    }

}
