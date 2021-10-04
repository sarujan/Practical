<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Representative;

class RepresentativeController extends Controller
{
    function index(){
        $representativeList = Representative::get();
        return view('representative',['representativeList'=>$representativeList]);
    }

    function create(Request $request){
        $request->validate([
            'id' => ['required'],
            'name' => ['required'],
            'email' => ['required','email'],
            'telephone' => ['required'],
            'current_route' => ['required'],
        ]);

        $res = Representative::create($request->all());
        return Redirect::to('/');
    }

    function view(Request $request){
        $representative=Representative::where('id',$request->id)->get();
        return view('representativeview',['representative'=>$representative]);
    }
    function edit(Request $request){
        $representative=Representative::where('id',$request->id)->get();
        return view('representativeedit',['representative'=>$representative]);
    }
    function submit(Request $request){
        // return $request->edit_id;
        $res = Representative::where('id',$request->edit_id)->update($request->all());

        return Redirect::to('/');
    }


    function delete(Request $request){
        $res=Representative::where('id',$request->id)->delete();
        return Redirect::to('/');
    }
}
