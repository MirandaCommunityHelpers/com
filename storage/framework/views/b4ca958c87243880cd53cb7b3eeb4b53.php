<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Reportes de doctores</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Generar Reporte</h3>
                </div>
                <div class="card-body">
                    <a href="<?php echo e(url('/admin/doctores/pdf')); ?>" class="btn btn-success"><i class="bi bi-printer"></i> Listado del personal medico</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/doctores/reportes.blade.php ENDPATH**/ ?>