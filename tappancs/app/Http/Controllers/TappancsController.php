<?php

namespace App\Http\Controllers;

use App\Models\Tappancs;
use Illuminate\Http\Request;

class TappancsController extends Controller
{
    //
    public function index(){
        
        return Tappancs::all();
    }

    public function show($id){
        return Tappancs::findOrFail($id);
    }

    public function store(Request $request){
        $tappancs = new Tappancs();
        $tappancs->nev = $request->input('nev');
        $tappancs->fajta = $request->input('fajta');
        $tappancs->foot = $request->input('foot');
        $tappancs->user_id = $request->input('user_id');
        $tappancs->save();
    }

    public function update(Request $request, $id){
        $tappancs = Tappancs::findOrFail($id);
        $tappancs->nev = $request->input('nev');
        $tappancs->fajta = $request->input('fajta');
        $tappancs->foot = $request->input('foot');
        $tappancs->user_id = $request->input('user_id');
        $tappancs->save();
    }

    public function destroy($id){
        Tappancs::findOrFail($id)->delete();
    }


}
