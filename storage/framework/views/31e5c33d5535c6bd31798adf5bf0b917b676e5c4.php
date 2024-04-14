

<?php $__env->startSection('content'); ?>
    <h2>Disciplinas</h2>

    <h3>Disciplinas (Matérias):</h3>
    <?php if(isset($disciplinas)): ?>
        <?php if($disciplinas->isEmpty()): ?>
            <h4 style="color: red">Nenhuma Disciplina Encontrada!</h4>
        <?php else: ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Criação</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($disciplina->nome); ?></td>
                            <td><?php echo e($disciplina->data_criacao); ?></td>
                            <td>
                                <a href="<?php echo e(route('disciplina.show', $disciplina->id)); ?>">Exibir</a>
                                <a href="<?php echo e(route('disciplina.edit', $disciplina->id)); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Disciplinas Cadastradas: <?php echo e($disciplinas->count()); ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    <?php endif; ?>

    <div class="mt-5"> 
        <a href="<?php echo e(route('disciplina.create')); ?>" class="btn-custom">Adicionar Disciplina</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/disciplina/index.blade.php ENDPATH**/ ?>