<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProdusController;
use App\Models\Categorie;
use App\Models\Produs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;
use function PHPUnit\Framework\directoryExists;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 * Rute front-end
 */
Route::get('/', [FrontEndController::class, 'index']);

Route::group(['prefix' => 'categorii'], function () {
    Route::get('/{categorie?}', function (Request $request, $categorie = NULL) {
       if ($categorie) {
           $categorie = str_replace('-', ' ', $categorie);
           $categorie = Categorie::with('produse')->where('nume', $categorie)->firstOrFail();
           return view('front.categorii-produse', compact('categorie'));
       }
        $produse = Produs::all();
       return view('front.categorii-produse', compact('produse'));
    })->name('front.categorie.detalii');
});

Route::get('produse/detalii', function () {
    return view('front.produse.detalii');
});

Route::get('categorii/{numeCategorie}/{asdas}', function (Request $request, $categorie) {
    dd($categorie);
});
/*
 * Rute back
 */

Route::get('admin', function () {
    return view('back.admin');
})->name('admin');

Route::group(['prefix' => 'admin'], function () {
    // rute produse admin
    Route::get('produse', [ProdusController::class, 'listaProduse'])->name('produse.lista');
    Route::get('produse/adauga', [ProdusController::class, 'adaugaProdus'])->name('produse.adauga');
    Route::get('produse/{id}/editeaza', [ProdusController::class, 'editeazaProdus'])->name('produse.editeaza');
    Route::post('produse/adauga', [ProdusController::class, 'salveazaProdus'])->name('produse.salveaza');
    Route::put('produse/{id}/actualizeaza', [ProdusController::class, 'actualizeazaProdus'])
        ->name('produse.actualizeaza');
    Route::delete('produs/{id}', [ProdusController::class, 'stergeProdus'])->name('produse.sterge');

    // rute categorii admin
    Route::get('categorii', [CategorieController::class, 'listaCategorii'])->name('categorie.lista');
    Route::get('categorii/adauga', [CategorieController::class, 'adaugaCategorie'])->name('categorie.adauga');
    Route::post('categorii', [CategorieController::class, 'salveazaCategorie'])->name('categorie.salveaza');
    Route::get('categorii/{id}/editeaza', [CategorieController::class, 'editeazaCategorie'])->name('categorie.editeaza');
    Route::put('categorii/{id}/actualizeaza', [CategorieController::class, 'actualizeazaCategorie'])
        ->name('categorie.actualizeaza');
    Route::delete('categorii/{id}', [CategorieController::class, 'stergeCategorie'])->name('categorie.sterge');
});

/*
 * !Rute front-end
 */
