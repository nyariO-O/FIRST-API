<?php

namespace App\Http\Controllers;

use App\Models\Game;

use App\Models\GameGenre;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
        return Game::all();
    }
    public function show(Game $id){
        return $id;
    }
    public function store(Request $request){
        return Game::create($request->all());
    }
    public function update(Request $request, Game $id){
        $id->update($request->all());
        return $id;
    }
    public function destroy(Game $id){
        $id->delete();
        return "deleted";
    }
    public function ShowImage(Game $id)
    {
        return $id->image;
    }
}
