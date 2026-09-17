<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard', ['totalCarros' => Carro::count()]);
    }
}
