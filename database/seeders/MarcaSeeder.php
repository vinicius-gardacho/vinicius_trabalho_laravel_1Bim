<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Toyota', 'Volkswagen', 'Honda'] as $nome) {
            Marca::updateOrCreate(['nome' => $nome]);
        }
    }
}
