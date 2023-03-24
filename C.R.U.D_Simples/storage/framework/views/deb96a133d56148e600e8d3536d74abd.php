<?php $__env->startSection('conteudo'); ?>
    <a href="/computadores/create">Novo</a>
    <p>Marca Preço RAM Disco</p>
    <?php $__currentLoopData = $ComputadorCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($computador -> marca); ?> <?php echo e($computador -> preco); ?> <?php echo e($computador -> ram); ?> <?php echo e($computador -> disco); ?>

        <a href="/computadores/<?php echo e($computador->id); ?>/edit">Editar</a>
        <a href="/computadores/<?php echo e($computador->id); ?>">Excluir</a>
        </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($ComputadorCollection->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fatecpg-ads4-noite/Documentos/Projetos_Laravel/crudsimples/resources/views/computador/index.blade.php ENDPATH**/ ?>