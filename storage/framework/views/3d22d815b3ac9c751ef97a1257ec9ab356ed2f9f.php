

<?php $__env->startSection('content'); ?>
    <h2>Atualizar dados do Diretor</h2>
    <form class="form" id="update-form" method="POST" action="<?php echo e(route('direcao.update', $direcao->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="Nome">Nome:</label>
            <input type="text" name="Nome" id="Nome" class="form-control" required value="<?php echo e($direcao->Nome); ?>">
        </div>

        <div class="form-group">
            <label for="CPF">CPF:</label>
            <input type="text" name="CPF" id="CPF" class="form-control <?php $__errorArgs = ['CPF'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('CPF', $direcao->CPF)); ?>">
            <?php $__errorArgs = ['CPF'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback error-message"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required value="<?php echo e($direcao->data_nascimento); ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required value="<?php echo e($direcao->email); ?>">
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

    <form id="delete-form" method="POST" action="<?php echo e(route('direcao.destroy', $direcao->id)); ?>" style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/direcao/edit.blade.php ENDPATH**/ ?>