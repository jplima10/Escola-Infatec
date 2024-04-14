

<?php $__env->startSection('content'); ?>
    <?php if(isset($msg)): ?>
        <h3 style="color: red"><?php echo e($msg); ?></h3>
        <a href="<?php echo e(route('direcao.index')); ?>">Voltar</a>
    <?php else: ?>
        <h2>Mostrando dados da Disciplina</h2>
        <p><strong>Nome:</strong> <?php echo e($disciplina->nome); ?> </p>
        <p><strong>Data de Criação:</strong> <?php echo e($disciplina->data_criacao); ?> </p>
        <a href="<?php echo e(route('direcao.index')); ?>">Voltar</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/disciplina/show.blade.php ENDPATH**/ ?>