<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Listado de historiales</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <dv class="card-header">
                    <h3 class="card-title">Historiales registrados</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(url('admin/historial/create')); ?>" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>
                </dv>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0">
                        <tr>
                            <td style="text-align: center"><b>Nro</b></td>
                            <td style="text-align: center"><b>Paciente</b></td>
                            <td style="text-align: center"><b>Fecha de la cita medica</b></td>
                            <td style="text-align: center"><b>Detalle</b></td>
                            <td style="text-align: center"><b>Acciones</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 1; ?>
                        <?php $__currentLoopData = $historiales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historiale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($historiale->doctor_id == Auth::user()->doctor->id): ?>
                                <tr>
                                    <td style="text-align: center"><?php echo e($contador++); ?></td>
                                    <td><?php echo e($historiale->paciente->apellidos." ".$historiale->paciente->nombres); ?></td>
                                    <td style="text-align: center"><?php echo e($historiale->fecha_visita); ?></td>
                                    <td>
                                        <?php echo \Illuminate\Support\Str::limit($historiale->detalle, 100, '...'); ?>

                                    </td>
                                    <td style="text-align: center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="<?php echo e(url('admin/historial/'.$historiale->id)); ?>" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="<?php echo e(url('admin/historial/pdf/'.$historiale->id)); ?>" type="button" class="btn btn-warning btn-sm"><i class="bi bi-printer"></i></a>
                                            <a href="<?php echo e(url('admin/historial/'.$historiale->id.'/edit')); ?>" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="<?php echo e(url('admin/historial/'.$historiale->id.'/confirm-delete')); ?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 5,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Historiales",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Historiales",
                                    "infoFiltered": "(Filtrado de _MAX_ total Historiales)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Historiales",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/historial/index.blade.php ENDPATH**/ ?>