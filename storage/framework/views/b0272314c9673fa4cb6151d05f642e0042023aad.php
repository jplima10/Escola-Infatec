

<?php $__env->startSection('content'); ?>
    <h2>Direção</h2>

    <h3>Diretores:</h3>
    <?php if(isset($direcaos)): ?>
        <?php if($direcaos->isEmpty()): ?>
            <h4 style="color: red">Nenhum Diretor Encontrado!</h4>
        <?php else: ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Email</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $direcaos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $direcao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($direcao->Nome); ?></td>
                            <td><?php echo e($direcao->CPF); ?></td>
                            <td><?php echo e($direcao->data_nascimento); ?></td>
                            <td><?php echo e($direcao->email); ?></td>
                            <td>
                                <a href="<?php echo e(route('direcao.show', $direcao->id)); ?>">Exibir</a>
                                <a href="<?php echo e(route('direcao.edit', $direcao->id)); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">Diretores Cadastrados: <?php echo e($direcaos->count()); ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    <?php endif; ?>

    <div class="mt-5"> 
        <a href="<?php echo e(route('direcao.create')); ?>" class="btn-custom">Adicionar Diretor</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/direcao/index.blade.php ENDPATH**/ ?>