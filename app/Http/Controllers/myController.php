<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class myController extends Controller
{
    //
    function insert(Request $req){
      $name = $req-> get('pname');
      $price = $req-> get('pprice');
      $image = $req-> file('img')->getClientOriginalName();
      //move uploaded file
      $req->img->move(public_path('images'),$image);

      $prod = new product();
      $prod->PNmae = $name;
      $prod->Pprice = $price;
      $prod->PImage = $image;
      $prod->save();
      return redirect('/');
    }
    function readData(){
        $pdata = product::all();
        return view('insertRead',['data'=>$pdata]);
    }
    function updateOrDelete(Request $req){
       $id = $req->get('id');
       $name = $req->get('name');
       $price = $req->get('price');
       if($req->get('update')== 'Update'){
        return view('updateView',['pid'=> $id, 'pname'=>$name, 'pprice'=>$price ]);
       }
       else{
       $prod = product::find($id);
       $prod->delete();
       }
       return redirect('/');
    }

    function update(Request $req){
        $ID = $req->get('id');
        $Name = $req->get('name');
        $Price = $req->get('price');
        $prod = product::find($ID);
        $prod -> PNmae = $Name;
        $prod -> PPrice = $Price;
        $prod -> save();
        return redirect('/');

       
    }
}