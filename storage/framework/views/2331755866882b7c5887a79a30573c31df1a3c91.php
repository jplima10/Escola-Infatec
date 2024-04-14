
<?php $__env->startSection('content'); ?>
    <h2>Cadastrar Nova Disciplina</h2>
<form action="<?php echo e(route('disciplina.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="nome">Nome da Disciplina:</label>
        <div>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div> 
    </div>

    <div class="form-group">
        <label for="data_criacao">Data de Criação:</label>
        <div>
            <input type="date" name="data_criacao" id="data_criacao" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/disciplina/create.blade.php ENDPATH**/ ?>