<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            [
                'nombre' => 'aumento de peso'
            ],
            [
                'nombre' => 'bajar de peso'
            ],
            [
                'nombre' => 'nutritivo'
            ],
            [
                'nombre' => 'vegetariano'
            ],
            [
                'nombre' => 'vegano'
            ],
        ];

        foreach ($tipos as $tipo) {
            Tipo::create($tipo);
        }
    }
}
