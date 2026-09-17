<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['marca_id', 'modelo', 'ano', 'preco'];

    protected function casts(): array
    {
        return ['ano' => 'integer', 'preco' => 'decimal:2'];
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
