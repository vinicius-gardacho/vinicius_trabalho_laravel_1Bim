<div>
    <label for="marca_id" class="block text-sm font-medium text-gray-700">Marca</label>
    <select id="marca_id" name="marca_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        <option value="">Selecione uma marca</option>
        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}" @selected(old('marca_id', $carro->marca_id ?? '') == $marca->id)>{{ $marca->nome }}</option>
        @endforeach
    </select>
    @error('marca_id')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
</div>
<div><label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label><input id="modelo" name="modelo" value="{{ old('modelo', $carro->modelo ?? '') }}" required maxlength="100" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">@error('modelo')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror</div>
<div class="grid gap-5 sm:grid-cols-2"><div><label for="ano" class="block text-sm font-medium text-gray-700">Ano</label><input id="ano" name="ano" type="number" min="1950" max="2100" value="{{ old('ano', $carro->ano ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">@error('ano')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror</div><div><label for="preco" class="block text-sm font-medium text-gray-700">Preço</label><input id="preco" name="preco" type="number" step="0.01" min="0" value="{{ old('preco', $carro->preco ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">@error('preco')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror</div></div>
