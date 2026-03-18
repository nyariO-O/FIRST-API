<?php

namespace App\Http\Controllers;


use App\Models\GameGenre;
use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index(){
        return Image::all();
    }
    public function show(Image $id){
        return $id;
    }
    public function store(Request $request){
        return Image::create($request->all());
    }
    public function update(Request $request, Image $id){
        $id->update($request->all());
        return $id;
    }
    public function destroy(Image $id){
        $id->delete();
        return "deleted";
    }
    public function ShowGame(Image $id){
        return $id->game_name;
    }
}
