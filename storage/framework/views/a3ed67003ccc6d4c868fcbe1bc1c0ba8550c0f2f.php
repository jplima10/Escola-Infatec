
<?php $__env->startSection('content'); ?>
    <h2>Cadastrar Novo Diretor</h2>
<form action="<?php echo e(route('direcao.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="Nome">Nome:</label>
        <div>
            <input type="text" name="Nome" id="Nome" class="form-control" required>
        </div> 
    </div>


    <div class="form-group">
        <label for="CPF">CPF:</label>
        <div>
            <input type="text" name="CPF" id="CPF" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <div>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <div>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/direcao/create.blade.php ENDPATH**/ ?>