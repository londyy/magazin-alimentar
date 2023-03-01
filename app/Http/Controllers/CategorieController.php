<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
//use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class CategorieController extends Controller
{
    public function listaCategorii()
    {
        $categorii = Categorie::all();
        return view('back.categorii.lista-categorii', compact('categorii'));
    }

    public function stergeCategorie($id)
    {
        $categorie = Categorie::where('id', $id)->firstOrFail();
        $categorie->delete();
        return back();
    }

    public function adaugaCategorie()
    {
        return view('back.categorii.adauga-categorie');
    }

    public function salveazaCategorie(Request $request)
    {
//        dd($request->all());
        $dateValidate = $request->validate([
            'nume' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
//dd($request->image->extension());
        $imageName = time().'.'.$request->image->extension();
        $dateValidate['imagine'] = $imageName;
        $request->image->move(public_path('imaginicategorii/'), $imageName);
        if ($dateValidate['image']) {
            unset($dateValidate['image']);
        }
//        dd($dateValidate);
        Categorie::create($dateValidate);
        return back()->with([
            'success' => 'Categoria a fost salvata cu success.'
        ]);
    }

    public function editeazaCategorie($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('back.categorii.editeaza-categorii', compact('categorie'));
    }

    public function actualizeazaCategorie(Request $request, $id)
    {
        $dateValidate = $request->validate([
            'nume' => '',
            'image' => ''
        ]);

        $categorie = Categorie::findOrFail($id);

        if (isset($dateValidate['image'])) {
            unset($dateValidate['image']);
            $imageName = time().'.'.$request->image->extension();

            $dateValidate['imagine'] = $imageName;

            $request->image->move(public_path('imaginicategorii/'), $imageName);

            if ($categorie->imagine && file_exists(public_path("imaginicategorii/".$categorie->imagine))) {
                unlink(public_path("imaginicategorii/".$categorie->imagine));
            }

        }
        $categorie->update($dateValidate);

        return back()->with('success', 'Categoria a fost editata');
    }
}
