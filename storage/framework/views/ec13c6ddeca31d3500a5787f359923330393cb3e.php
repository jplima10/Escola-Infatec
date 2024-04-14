

<?php $__env->startSection('content'); ?>
    <h2>Alunos</h2>

    <h3>Alunos:</h3>
    <?php if(isset($alunos)): ?>
        <?php if($alunos->isEmpty()): ?>
            <h4 style="color: red">Nenhum Aluno Encontrado!</h4>
        <?php else: ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($aluno->nome); ?></td>
                            <td><?php echo e($aluno->CPF); ?></td>
                            <td><?php echo e($aluno->data_nascimento); ?></td>
                            <td>
                                <a href="<?php echo e(route('aluno.show', $aluno->id)); ?>" class="btn btn-info">Exibir</a>
                                <a href="<?php echo e(route('aluno.edit', $aluno->id)); ?>" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Alunos Cadastrados: <?php echo e($alunos->count()); ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    <?php endif; ?>

    <div class="mt-5 space-below"> 
        <a href="<?php echo e(route('aluno.create')); ?>" class="btn-custom">Adicionar Aluno</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/aluno/index.blade.php ENDPATH**/ ?>