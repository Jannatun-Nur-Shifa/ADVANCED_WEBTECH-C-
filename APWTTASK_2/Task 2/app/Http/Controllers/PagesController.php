<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
    {
        return view('home');
    }
   public function product(){

        $p1 = "Product 1 :";
        $p2 = "Product 2 :";
        $p3 = "Product 3 :";
        $info1 = array("Bread", "Code : 111111", "Exp : 20-02-2022","Price : 60 TK");
        $info2 = array("Butter", "Code : 222222","Exp : 12-02-2022", "Price : 120 TK");
        $info3 = array("Milk", "Code : 333333", "Exp : 01-04-2022" ,"Price : 80 TK");
         
        return view('product')
        ->with('p1', $p1)
        ->with('p2', $p2)
        ->with('p3', $p3)
        ->with('info1', $info1)
        ->with('info2', $info2)
        ->with('info3', $info3);
    }
     public function teams()
    {
        $t1 = "Person 1 :";
        $t2 = "Person 2 :";
        $t3 = "Person 3 :";
        $t4 = "Person 4 :";

        $perinfo1 = array("JANNATUN NUR SHIFA", "Id : 19-40366-1", "Mail : jannatun0107@gmail.com");
        $perinfo2 = array("AHMAD ZAMIL","Id : 19-40400-1", "Mail : ahmedzamil04@gmail.com");
        $perinfo3 = array("EHSAN TALUKDER", "Id : 19-40370-1", "Mail : ehsantalukdar321@gmail.com");
        $perinfo4 = array("JANNATUL FERDOUS NISHI", "Id : 19-40374-1", "Mail : jannatulnishi588@gmail.com");
         
       return view("teams")
       ->with('t1', $t1)
        ->with('t2', $t2)
        ->with('t3', $t3)
        ->with('t4', $t4)
        ->with('perinfo1', $perinfo1)
        ->with('perinfo2', $perinfo2)
        ->with('perinfo3', $perinfo3)
        ->with('perinfo4', $perinfo4);
       ;
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
