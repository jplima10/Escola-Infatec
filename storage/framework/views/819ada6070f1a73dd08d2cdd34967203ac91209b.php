

<?php $__env->startSection('content'); ?>
    <h2>Docentes</h2>

    <h3>Docentes:</h3>
    <?php if(isset($docentes)): ?>
        <?php if($docentes->isEmpty()): ?>
            <h4 style="color: red">Nenhum Docente Encontrado!</h4>
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
                    <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($docente->nome); ?></td>
                            <td><?php echo e($docente->CPF); ?></td>
                            <td><?php echo e($docente->data_nascimento); ?></td>
                            <td>
                                <a href="<?php echo e(route('docente.show', $docente->id)); ?>">Exibir</a>
                                <a href="<?php echo e(route('docente.edit', $docente->id)); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Docentes Cadastrados: <?php echo e($docentes->count()); ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>
    <?php endif; ?>

    <div class="mt-5"> 
        <a href="<?php echo e(route('docente.create')); ?>" class="btn-custom">Adicionar Docente</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/docente/index.blade.php ENDPATH**/ ?>