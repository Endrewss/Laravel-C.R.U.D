<?php $__env->startSection('conteudo'); ?>
<dl>
    <dt>Marca</dt>
    <dd><?php echo e($objetoComputador->marca); ?></dd>
    <dt>Preço</dt>
    <dd><?php echo e($objetoComputador->preco); ?></dd>
    <dt>RAM</dt>
    <dd><?php echo e($objetoComputador->ram); ?></dd>
    <dt>Disco</dt>
    <dd><?php echo e($objetoComputador->disco); ?></dd>
</dl>
<form action="/computadores/<?php echo e($objetoComputador->id); ?>" method='post'>
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <input type="submit" value='Confirmar'/>
    <a href="/computadores"> Voltar </a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fatecpg-ads4-noite/Documentos/Projetos_Laravel/crudsimples/resources/views/computador/show.blade.php ENDPATH**/ ?>