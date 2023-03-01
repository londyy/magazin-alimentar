<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorii = [
            'nume' => [
                'DELICATESE DIN PEŞTE ŞI ICRE',
                'LEGUME, FRUCTE, VERDEAȚĂ',
                'PÂINE ŞI PRODUSE DE PANIFICAȚIE',
                'PĂSĂRI ŞI CARNE PROASPĂTĂ',
                'PRODUSE LACTATE ŞI OUĂ',
            ],
            'imagine' => [
                'DELICATESE DIN PEŞTE ŞI ICRE.jpeg',
                'LEGUME, FRUCTE, VERDEAȚĂ.jpeg',
                'PÂINE ŞI PRODUSE DE PANIFICAȚIE.jpeg',
                'PĂSĂRI ŞI CARNE PROASPĂTĂ.jpeg',
                'PRODUSE LACTATE ŞI OUĂ.jpeg',
            ]
        ];

        for ($i = 0; $i < count($categorii['imagine']); $i++) {
            DB::table('categorii')->insert([
                'nume' => $categorii['nume'][$i],
                'imagine' => $categorii['imagine'][$i]
            ]);
        }
    }
}
