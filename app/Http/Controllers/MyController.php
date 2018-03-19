<?php

namespace App\Http\Controllers;
use App\UserList;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Closure;

class MyController extends Controller
{

    public function index(){
        $articles['allData']  = UserList::all();
        //return response()->json($articles);
        return view('hello', $articles);
    }

    public function store(Request $request){
        $dat = $request->all();
        UserList::insert($dat);
        return $dat;
    }

    public function getData()
    {
        $articles = UserList::all();
        return response($articles);
    }
    public function getSingleData($id)
    {
        $articles['singleData']  = UserList::where('id', $id)->get();
        //return response()->json($articles);

        return $articles;
    }

}
