<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        $p3 = $p1 + $p2;
        $fornecedores = ['Fornecedor 1'];
//        return view('site.teste', ['p1' => $p1,'p2'=>$p2 ,'p3' => $p3 ]); //// ARRAY ASSOSIATIVO
        return view('site.teste', compact('p1','p2','p3','fornecedores')); // COMPACT
//       return view('site.teste')->with('p1',$p1)->with('p2',$p2)->with('p3',$p3); // WITH

    }
    //
}
