<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Pago del paciente <?php echo e($pago->paciente->apellidos." ".$pago->paciente->nombres); ?></h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Paciente</label>
                                    <p><?php echo e($pago->paciente->apellidos." ".$pago->paciente->nombres); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Doctores</label>
                                    <p><?php echo e($pago->doctor->apellidos." ".$pago->doctor->nombres); ?></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Fecha de pago</label>
                                    <p><?php echo e($pago->fecha_pago); ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form group">
                                    <label for="">Monto</label>
                                    <p><?php echo e($pago->monto); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">Descripción</label>
                                    <p><?php echo e($pago->descripcion); ?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form group">
                                    <a href="<?php echo e(url('admin/pagos')); ?>" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/pagos/show.blade.php ENDPATH**/ ?>