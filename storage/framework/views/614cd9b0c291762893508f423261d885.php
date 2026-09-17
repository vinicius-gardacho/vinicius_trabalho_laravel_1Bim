<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Catálogo de carros</h2>
            <?php if(auth()->user()->isAdmin()): ?>
                <a href="<?php echo e(route('carros.create')); ?>" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">Novo carro</a>
            <?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-8">
        <div class="mx-auto max-w-7xl space-y-4 px-4 sm:px-6 lg:px-8">
            <?php if(session('status')): ?>
                <div class="rounded-md bg-emerald-50 p-4 text-sm text-emerald-700"><?php echo e(session('status')); ?></div>
            <?php endif; ?>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
                        <thead><tr class="text-xs uppercase tracking-wider text-gray-500"><th class="px-4 py-3">Modelo</th><th class="px-4 py-3">Marca</th><th class="px-4 py-3">Ano</th><th class="px-4 py-3">Preço</th><th class="px-4 py-3">Ações</th></tr></thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php $__empty_1 = true; $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr><td class="px-4 py-4 font-medium"><?php echo e($carro->modelo); ?></td><td class="px-4 py-4"><?php echo e($carro->marca->nome); ?></td><td class="px-4 py-4"><?php echo e($carro->ano); ?></td><td class="px-4 py-4">R$ <?php echo e(number_format((float) $carro->preco, 2, ',', '.')); ?></td><td class="px-4 py-4"><div class="flex gap-3"><?php if(auth()->user()->isAdmin()): ?><a class="text-indigo-600 hover:underline" href="<?php echo e(route('carros.edit', $carro)); ?>">Editar</a><form method="POST" action="<?php echo e(route('carros.destroy', $carro)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button class="text-red-600 hover:underline" type="submit">Excluir</button></form><?php else: ?><span class="text-gray-400">Somente leitura</span><?php endif; ?></div></td></tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr><td colspan="5" class="px-4 py-8 text-center text-gray-500">Nenhum carro cadastrado.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div class="mt-6"><?php echo e($carros->links()); ?></div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\vinic\OneDrive\Desktop\Arquivos Faculdade\Códigos Faculdade\Códigos 4º Periodo\Desenvolvimento Back-End\Trabalho1Bimestre\vinicius_trabalho_laravel_1Bim\resources\views/carros/index.blade.php ENDPATH**/ ?>