<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produs;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
Image::configure(['driver' => 'imagick']);

class ProdusController extends Controller
{
    public function listaProduse()
    {
        $produse = Produs::with('categorie')->get();
        return view('back.produse.lista-produse', compact('produse'));
    }

    public function adaugaProdus()
    {
        return view('back.produse.adauga-produs');
    }
    public function salveazaProdus(Request $request)
    {
        $dateValidate = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nume' => 'required',
            'categorie_id' => 'required|integer',
            'pret' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $dateValidate['imagine'] = $imageName;
        $categorie = Categorie::find($request->categorie_id);
//        dd($imageName);
        $request->image->move(public_path('images/'.$categorie->nume), $imageName);
        if ($dateValidate['image']) {
            unset($dateValidate['image']);
        }

        Produs::create($dateValidate);

        return back()->with('success', 'Produs creat cu success');
    }

    public function actualizeazaProdus(Request $request, $id)
    {
//        dd($request->all());
        $dateValidate = $request->validate([
            'nume' => '',
            'categorie_id' => '',
            'pret' => '',
            'image' => ''
        ]);

        $produs = Produs::findOrFail($id);

        if (isset($dateValidate['image'])) {
            unset($dateValidate['image']);
            $imageName = time().'.'.$request->image->extension();

            $dateValidate['imagine'] = $imageName;

            // nume categorie
            $numeCategorie = Categorie::where('id', $request->categorie_id)->first();

            $request->image->move(public_path('images/'.$numeCategorie->nume.'/'), $imageName);

            if(file_exists(public_path("images/".$produs->categorie->nume . '/'.$produs->imagine))) {
                unlink(public_path("images/".$produs->categorie->nume . '/'.$produs->imagine));
            }
        }
        $produs->update($dateValidate);

        return back()->with('success', 'Produs actualizat cu success');
    }

    public function stergeProdus($id)
    {
        $produs = Produs::findOrFail($id);
        $produs->delete();
        return back()->with('success', 'Produsul ' . $produs->nume . '  a fost sters cu success');
    }

    public function editeazaProdus(Request $request, $id)
    {
        $produs = Produs::find($id);
        return view('back.produse.editeaza-produs', compact('produs'));
    }
}
