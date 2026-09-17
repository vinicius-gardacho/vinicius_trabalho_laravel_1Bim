<?php

namespace Database\Seeders;

use App\Models\Carro;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    public function run(): void
    {
        $toyota = Marca::where('nome', 'Toyota')->firstOrFail();
        $honda = Marca::where('nome', 'Honda')->firstOrFail();

        Carro::updateOrCreate(
            ['marca_id' => $toyota->id, 'modelo' => 'Corolla'],
            ['ano' => 2025, 'preco' => 149900],
        );

        Carro::updateOrCreate(
            ['marca_id' => $honda->id, 'modelo' => 'Civic'],
            ['ano' => 2024, 'preco' => 158900],
        );
    }
}
