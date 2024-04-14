

<?php $__env->startSection('content'); ?>
    <div class="card-container">
        <div class="card" onclick="window.location.href='/direcao'">
            <h3>Direção</h3>
        </div>

        <div class="card" onclick="window.location.href='/docente'">
            <h3>Docente</h3>
        </div>

        <div class="card" onclick="window.location.href='/aluno'">
            <h3>Aluno(a)</h3>
        </div>

        <div class="card" onclick="window.location.href='/disciplina'">
            <h3>Disciplina</h3>
        </div>

        <div class="card" onclick="window.location.href='/turma'">
            <h3>Turma</h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('direcao.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joaod\Desktop\Estudos\Projeto-estágio\infatec\resources\views/homescreen/index.blade.php ENDPATH**/ ?>