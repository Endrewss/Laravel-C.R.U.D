<?php $__env->startSection('conteudo'); ?>
    <form action="/computadores/<?php echo e($objetoComputador -> id); ?>" method='post'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <p>Marca: <input type="text" name='marca' value="<?php echo e(empty(old('marca')) ? $objetoComputador-> marca : old ('marca')); ?>"></p>
        <?php if($errors->has('marca')): ?>
            <p><?php echo e($errors->first('marca')); ?></p>
        <?php endif; ?>
        <p>Preço: <input type="number" name='preco' step= '0.01' value="<?php echo e(empty(old('preco')) ? $objetoComputador-> preco : old ('preco')); ?>"></p>
        <?php if($errors->has('preco')): ?>
            <p><?php echo e($errors->first('preco')); ?></p>
        <?php endif; ?>
        <p>RAM: <input type="number" name='ram' value="<?php echo e(empty(old('ram')) ? $objetoComputador-> ram : old ('ram')); ?>"></p>
        <?php if($errors->has('ram')): ?>
            <p><?php echo e($errors->first('ram')); ?></p>
        <?php endif; ?>
        <p>Disco: <input type="number" name='disco' value="<?php echo e(empty(old('disco')) ? $objetoComputador-> disco : old ('disco')); ?>"></p>
        <?php if($errors->has('disco')): ?>
            <p><?php echo e($errors->first('disco')); ?></p>
        <?php endif; ?>
        <p>
            <input type="submit" value='enviar'/>
            <a href="/computadores">Voltar</a>
        </p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fatecpg-ads4-noite/Documentos/Projetos_Laravel/crudsimples/resources/views/computador/edit.blade.php ENDPATH**/ ?>