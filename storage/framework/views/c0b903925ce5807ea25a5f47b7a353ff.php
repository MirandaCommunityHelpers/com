<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Listado de pacientes</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <dv class="card-header">
                    <h3 class="card-title">Pacientes registrados</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(url('admin/pacientes/create')); ?>" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>
                </dv>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0">
                        <tr>
                            <td style="text-align: center"><b>Nro</b></td>
                            <td style="text-align: center"><b>Nombres y apellidos</b></td>
                            <td style="text-align: center"><b>CI</b></td>
                            <td style="text-align: center"><b>Nro de seguro</b></td>
                            <td style="text-align: center"><b>Fecha de nacimiento</b></td>
                            <td style="text-align: center"><b>Genero</b></td>
                            <td style="text-align: center"><b>Celular</b></td>
                            <td style="text-align: center"><b>Email</b></td>
                            <td style="text-align: center"><b>Dirección</b></td>
                            <td style="text-align: center"><b>Acciones</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 1; ?>
                        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="text-align: center"><?php echo e($contador++); ?></td>
                                <td><?php echo e($paciente->nombres); ?> <?php echo e($paciente->apellidos); ?></td>
                                <td><?php echo e($paciente->ci); ?></td>
                                <td><?php echo e($paciente->nro_seguro); ?></td>
                                <td><?php echo e($paciente->fecha_nacimiento); ?></td>
                                <td><?php echo e($paciente->genero); ?></td>
                                <td><?php echo e($paciente->celular); ?></td>
                                <td><?php echo e($paciente->correo); ?></td>
                                <td><?php echo e($paciente->direccion); ?></td>
                                <td style="text-align: center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?php echo e(url('admin/pacientes/'.$paciente->id)); ?>" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                        <a href="<?php echo e(url('admin/pacientes/'.$paciente->id.'/edit')); ?>" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                        <a href="<?php echo e(url('admin/pacientes/'.$paciente->id.'/confirm-delete')); ?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 5,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Pacientes",
                                    "infoFiltered": "(Filtrado de _MAX_ total Pacientes)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Pacientes",
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/pacientes/index.blade.php ENDPATH**/ ?>