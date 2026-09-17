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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Painel de controle</h2>
     <?php $__env->endSlot(); ?>

    <div class="py-8"><div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><div class="grid gap-6 md:grid-cols-2"><div class="bg-white p-6 shadow-sm sm:rounded-lg"><p class="text-sm text-gray-500">Carros cadastrados</p><p class="mt-2 text-4xl font-semibold text-gray-900"><?php echo e($totalCarros); ?></p><a href="<?php echo e(route('carros.index')); ?>" class="mt-5 inline-block text-sm font-medium text-indigo-600 hover:underline">Ver catálogo</a></div><div class="bg-indigo-900 p-6 text-white shadow-sm sm:rounded-lg"><p class="text-sm text-indigo-200">Acesso atual</p><p class="mt-2 text-2xl font-semibold"><?php echo e(auth()->user()->isAdmin() ? 'Administrador' : 'Usuário'); ?></p><p class="mt-2 text-sm text-indigo-200"><?php echo e(auth()->user()->isAdmin() ? 'Você pode cadastrar e gerenciar carros.' : 'Você possui acesso somente para consulta.'); ?></p></div></div>
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
<?php /**PATH C:\Users\vinic\OneDrive\Desktop\Arquivos Faculdade\Códigos Faculdade\Códigos 4º Periodo\Desenvolvimento Back-End\Trabalho1Bimestre\vinicius_trabalho_laravel_1Bim\resources\views\dashboard.blade.php ENDPATH**/ ?>