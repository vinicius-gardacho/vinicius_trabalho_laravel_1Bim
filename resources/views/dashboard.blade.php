<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Painel de controle</h2>
    </x-slot>

    <div class="py-8"><div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><div class="grid gap-6 md:grid-cols-2"><div class="bg-white p-6 shadow-sm sm:rounded-lg"><p class="text-sm text-gray-500">Carros cadastrados</p><p class="mt-2 text-4xl font-semibold text-gray-900">{{ $totalCarros }}</p><a href="{{ route('carros.index') }}" class="mt-5 inline-block text-sm font-medium text-indigo-600 hover:underline">Ver catálogo</a></div><div class="bg-indigo-900 p-6 text-white shadow-sm sm:rounded-lg"><p class="text-sm text-indigo-200">Acesso atual</p><p class="mt-2 text-2xl font-semibold">{{ auth()->user()->isAdmin() ? 'Administrador' : 'Usuário' }}</p><p class="mt-2 text-sm text-indigo-200">{{ auth()->user()->isAdmin() ? 'Você pode cadastrar e gerenciar carros.' : 'Você possui acesso somente para consulta.' }}</p></div></div>
        </div>
    </div>
</x-app-layout>
