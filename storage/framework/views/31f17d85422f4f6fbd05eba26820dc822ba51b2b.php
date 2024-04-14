

<?php $__env->startSection('content'); ?>
    <h2>Atualizar dados da Disciplina</h2>
    <form class="form" id="update-form" method="POST" action="<?php echo e(route('disciplina.update', $disciplina->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required value="<?php echo e($disciplina->nome); ?>">
        </div>


        <div class="form-group">
            <label for="data_criacao">Data de Criação:</label>
            <input type="date" name="data_criacao" id="data_criacao" class="form-control" required value="<?php echo e($disciplina->data_criacao); ?>">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Excluir</button>
        </div>
    </form>

    <script>
        function confirmDelete() {
            if (confirm('Tem certeza que deseja excluir este registro?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>

    <form id="delete-form" method="POST" action="<?php echo e(route('docente.destroy', $disciplina->id)); ?>" style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/disciplina/edit.blade.php ENDPATH**/ ?>