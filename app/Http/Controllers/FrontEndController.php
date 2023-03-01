<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produs;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $categoriiRecomandate = Categorie::take(3)->inRandomOrder()->get();
        $produseRecomandate = Produs::take(3)->inRandomOrder()->get();
        $produseRecente = Produs::latest()->take(8)->get();

        return view('front.produse.index',
            compact(
                'categoriiRecomandate',
                'produseRecomandate',
                'produseRecente'
            ));
    }
}
