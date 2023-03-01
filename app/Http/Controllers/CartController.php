<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function reversCuvint($cuvint){
//        echo "afiseaza reversul unui cuvint";
        echo "reversul cuvintului ".$cuvint . " este: ". strrev($cuvint);
    }

    function exercitii()
    {
        $cuvint = 'valentin';
        $this->reversCuvint($cuvint);
    }

    public function produseInCos()
    {
        $produseInCos = \Cart::getContent();

//        dd($produseInCos);
//        dd(flash());
        return view('front.cart.cart', compact('produseInCos'));
    }

    public function adaugaInCos(Request $request)
    {
        \Cart::add($this->dateValidate());
        session()->flash('success', 'Produsul a fost adaug in cos');
//        return redirect()->route('produse.in.cos');
        return back();
    }

    protected function dateValidate()
    {
        return \request()->validate([
            'id' => '',
            'name' => '',
            'price' => '',
            'quantity' => '',
            'image' => '',
        ]);
    }
}
