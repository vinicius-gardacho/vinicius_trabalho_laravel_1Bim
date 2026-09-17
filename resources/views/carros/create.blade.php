<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Cadastrar carro</h2></x-slot>
    <div class="py-8"><div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8"><div class="bg-white p-6 shadow-sm sm:rounded-lg"><form method="POST" action="{{ route('carros.store') }}" class="space-y-5">@csrf @include('carros.partials.form')<div class="flex justify-end gap-3"><a href="{{ route('carros.index') }}" class="rounded-md px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">Cancelar</a><button class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">Salvar</button></div></form></div></div></div>
</x-app-layout>
