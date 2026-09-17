<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;
use App\Models\Carro;
use App\Models\Marca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class CarroController extends Controller
{
    public function index(): View
    {
        return view('carros.index', ['carros' => Carro::with('marca')->latest()->paginate(10)]);
    }

    public function create(): View
    {
        return view('carros.create', ['marcas' => Marca::orderBy('nome')->get()]);
    }

    public function store(StoreCarroRequest $request): RedirectResponse
    {
        Carro::create($request->validated());

        return to_route('carros.index')->with('status', 'Carro cadastrado com sucesso.');
    }

    public function edit(Carro $carro): View
    {
        return view('carros.edit', ['carro' => $carro, 'marcas' => Marca::orderBy('nome')->get()]);
    }

    public function update(UpdateCarroRequest $request, Carro $carro): RedirectResponse
    {
        $carro->update($request->validated());

        return to_route('carros.index')->with('status', 'Carro atualizado com sucesso.');
    }

    public function destroy(Carro $carro): RedirectResponse
    {
        Gate::authorize('delete', $carro);
        $carro->delete();

        return to_route('carros.index')->with('status', 'Carro removido com sucesso.');
    }
}
