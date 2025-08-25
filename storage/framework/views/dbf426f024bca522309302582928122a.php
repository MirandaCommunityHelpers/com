<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Listado de configuraciones</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <dv class="card-header">
                    <h3 class="card-title">Configuraciones</h3>
                    <div class="card-tools">
                        <a href="<?php echo e(url('admin/configuraciones/create')); ?>" class="btn btn-primary">
                            Registrar nuevo
                        </a>
                    </div>
                </dv>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0">
                        <tr>
                            <td style="text-align: center"><b>Nro</b></td>
                            <td style="text-align: center"><b>Hostipal/Clinica</b></td>
                            <td style="text-align: center"><b>Dirección</b></td>
                            <td style="text-align: center"><b>Teléfono</b></td>
                            <td style="text-align: center"><b>Correo</b></td>
                            <td style="text-align: center"><b>Logo</b></td>
                            <td style="text-align: center"><b>Acciones</b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $contador = 1; ?>
                        <?php $__currentLoopData = $configuraciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $configuracione): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="text-align: center"><?php echo e($contador++); ?></td>
                                <td><?php echo e($configuracione->nombre); ?></td>
                                <td><?php echo e($configuracione->direccion); ?></td>
                                <td><?php echo e($configuracione->telefono); ?></td>
                                <td><?php echo e($configuracione->correo); ?></td>
                                <td>
                                    <img src="<?php echo e(url('storage/'.$configuracione->logo)); ?>" alt="logo" width="100px">
                                </td>
                                <td style="text-align: center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?php echo e(url('admin/configuraciones/'.$configuracione->id)); ?>" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                        <a href="<?php echo e(url('admin/configuraciones/'.$configuracione->id.'/edit')); ?>" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                        <a href="<?php echo e(url('admin/configuraciones/'.$configuracione->id.'/confirm-delete')); ?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Configuraciones",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Configuraciones",
                                    "infoFiltered": "(Filtrado de _MAX_ total Configuraciones)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Configuraciones",
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/configuraciones/index.blade.php ENDPATH**/ ?>