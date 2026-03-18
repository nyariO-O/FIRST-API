<?php

namespace App\Http\Controllers;


use App\Models\MinSysReq;
use Illuminate\Http\Request;

class MinSysReqController extends Controller
{
    public function index(){
        return MinSysReq::all();
    }
    public function show(MinSysReq $id){
        return $id;
    }
    public function store(MinSysReq $request){
        return MinSysReq::create($request->all());
    }
    public function update(Request $request, MinSysReq $id){
        $id->update($request->all());
        return $id;
    }
    public function destroy(MinSysReq $id){
        $id->delete();
        return "deleted";
    }
}
