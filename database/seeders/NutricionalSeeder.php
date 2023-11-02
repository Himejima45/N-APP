<?php

namespace Database\Seeders;

use App\Models\Nutricional;
use Illuminate\Database\Seeder;

class NutricionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valores_nutricionales = [
            [
                'nombre' => 'Leche chocolatada',
                'calorias' => 62,
                'hc' => 3,
                'proteinas' => 3,
                'grasas' => 1.1
            ],
            [
                'nombre' => 'Leche descremada en polvo',
                'calorias' => 36,
                'hc' => 5.1,
                'proteinas' => 3.5,
                'grasas' => 0.1
            ],
            [
                'nombre' => 'Leche entera',
                'calorias' => 57,
                'hc' => 4.5,
                'proteinas' => 3,
                'grasas' => 3
            ],
            [
                'nombre' => 'Leche entera azucarada',
                'calorias' => 79,
                'hc' => 10,
                'proteinas' => 3,
                'grasas' => 3
            ],
            [
                'nombre' => 'Leche descremada',
                'calorias' => 45,
                'hc' => 4.7,
                'proteinas' => 3.1,
                'grasas' => 1.5
            ],
            [
                'nombre' => 'Leche cultiv descremada',
                'calorias' => 32,
                'hc' => 4.3,
                'proteinas' => 3.6,
                'grasas' => 0.1
            ],
            [
                'nombre' => 'Leche cultiv entera/frutas',
                'calorias' => 89,
                'hc' => 14,
                'proteinas' => 3.5,
                'grasas' => 2.2
            ],
            [
                'nombre' => 'Yogur con cereales',
                'calorias' => 48,
                'hc' => 9,
                'proteinas' => 3,
                'grasas' => 0.05
            ],
        ];

        foreach ($valores_nutricionales as $valor) {
            Nutricional::create($valor);
        }
    }
}
