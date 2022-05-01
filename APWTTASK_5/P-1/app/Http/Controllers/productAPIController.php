<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productAPIController extends Controller
{
    public function list(){

        $product = product::all();

        return $product;

    }

    public function create(Request $req){

        $pr = new product();

        $pr->id = $req->id;

        $pr->name = $req->name;

        $pr->price = $req->price;

        $pr->quantity = $req->quantity;

        $pr->dos = $req->dos;

        

        if($pr->save()) return "Successful";

    }
}
