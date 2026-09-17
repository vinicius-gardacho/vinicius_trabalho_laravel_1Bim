<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Catálogo de carros</h2>
            @if (auth()->user()->isAdmin())
                <a href="{{ route('carros.create') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">Novo carro</a>
            @endif
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl space-y-4 px-4 sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="rounded-md bg-emerald-50 p-4 text-sm text-emerald-700">{{ session('status') }}</div>
            @endif
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
                        <thead><tr class="text-xs uppercase tracking-wider text-gray-500"><th class="px-4 py-3">Modelo</th><th class="px-4 py-3">Marca</th><th class="px-4 py-3">Ano</th><th class="px-4 py-3">Preço</th><th class="px-4 py-3">Ações</th></tr></thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($carros as $carro)
                                <tr><td class="px-4 py-4 font-medium">{{ $carro->modelo }}</td><td class="px-4 py-4">{{ $carro->marca->nome }}</td><td class="px-4 py-4">{{ $carro->ano }}</td><td class="px-4 py-4">R$ {{ number_format((float) $carro->preco, 2, ',', '.') }}</td><td class="px-4 py-4"><div class="flex gap-3">@if (auth()->user()->isAdmin())<a class="text-indigo-600 hover:underline" href="{{ route('carros.edit', $carro) }}">Editar</a><form method="POST" action="{{ route('carros.destroy', $carro) }}">@csrf @method('DELETE')<button class="text-red-600 hover:underline" type="submit">Excluir</button></form>@else<span class="text-gray-400">Somente leitura</span>@endif</div></td></tr>
                            @empty
                                <tr><td colspan="5" class="px-4 py-8 text-center text-gray-500">Nenhum carro cadastrado.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-6">{{ $carros->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
