<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Produs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function PHPUnit\Framework\directoryExists;
use Faker\Factory as Faker;


class ProduseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        if (directoryExists(asset('images'))) {
            $imaginiSeederFolder = File::directories(base_path('public/images'));
            foreach ($imaginiSeederFolder as $folder) {
                $folderArray = explode('/', $folder);
                $subFolderImagini = end($folderArray);
                foreach ((array)$subFolderImagini as $subfolder) {
                    if (directoryExists($subfolder)) {
                        // obtinem id la categorie pe baza de nume
                        $categorie = DB::select('select id from Categorii where nume = ?', array($subfolder));
                        $categorieId = $categorie[0]->id;
                        $imagini = File::allFiles(base_path('public/images/'.$subfolder));
                        foreach ($imagini as $imagine) {
                            $imagineArray = explode('/', $imagine);
                            $imagineNume = end($imagineArray);


                            Produs::create([
                                'nume' => $faker->name,
                                'pret' => $faker->numberBetween(50, 200),
                                'imagine' => $imagineNume,
                                'categorie_id' => $categorieId,
                            ]);
                        }
                    }

                }
            }
        }
    }
}
