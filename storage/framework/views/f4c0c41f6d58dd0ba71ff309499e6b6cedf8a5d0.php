
<?php $__env->startSection('content'); ?>
    <?php if(isset($msg)): ?>
        <h3 style="color: red">Diretor não encontrado!</h3>
    <?php else: ?>
        <h2>Mostrando dados do diretor</h2>
        <p><strong>Nome:</strong> <?php echo e($direcao->Nome); ?> </p>
        <p><strong>CPF:</strong> <?php echo e($direcao->CPF); ?> </p>
        <p><strong>Data de Nascimento:</strong> <?php echo e($direcao->data_nascimento); ?> </p>
        <p><strong>email:</strong> <?php echo e($direcao->email); ?> </p>
        <a href="<?php echo e(route('direcao.index')); ?>">Voltar</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/direcao/show.blade.php ENDPATH**/ ?>