

<?php $__env->startSection('content'); ?>
    <h2>Turmas Cadastrados</h2>

    <h3>Turmas:</h3>
    <?php if(isset($turmas)): ?>
        <?php if($turmas->isEmpty()): ?>
            <h4 style="color: red">Nenhuma Turma Encontrada!</h4>
        <?php else: ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Data de Criação</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $turmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $turma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($turma->nome); ?></td>
                            <td><?php echo e($turma->ano); ?></td>
                            <td><?php echo e($turma->data_criacao); ?></td>
                            <td>
                                <a href="<?php echo e(route('turma.show', $turma->id)); ?>">Exibir</a>
                                <a href="<?php echo e(route('turma.edit', $turma->id)); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Turmas Cadastradas: <?php echo e($turmas->count()); ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    <?php endif; ?>

    <div class="mt-5"> 
        <a href="<?php echo e(route('turma.create')); ?>" class="btn-custom">Adicionar Turma</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/turma/index.blade.php ENDPATH**/ ?>