<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Reportes de reservas de citas medicas</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Generar Reporte</h3>
                </div>
                <div class="card-body">
                    <a href="<?php echo e(url('/admin/reservas/pdf')); ?>" class="btn btn-success">
                        <i class="bi bi-printer"></i> Listado de todas las reservas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Generar Reporte por fechas</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.reservas.pdf_fechas')); ?>" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Fecha inicio: </label>
                                <input type="date" name="fecha_inicio" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Fecha fin: </label>
                                <input type="date" name="fecha_fin" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <div style="height:32px;"></div>
                                <button class="btn btn-success"> <i class="bi bi-printer"></i> Generar reporte</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/reservas/reportes.blade.php ENDPATH**/ ?>