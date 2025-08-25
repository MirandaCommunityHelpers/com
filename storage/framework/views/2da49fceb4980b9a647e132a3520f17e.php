<?php $__env->startSection('content'); ?>
    <div class="row">
        <h1>Registro de un nuevo horario</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body row">
                    <div class="col-md-3">
                        <form action="<?php echo e(url('/admin/horarios/create')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Consultorios</label> <b>*</b>
                                        <select name="consultorio_id" id="consultorio_select" class="form-control">
                                            <option value="">Seleccionar consultorio</option>
                                            <?php $__currentLoopData = $consultorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($consultorio->id); ?>"><?php echo e($consultorio->nombre." - ".$consultorio->ubicacion); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <script>
                                            $('#consultorio_select').on('change',function () {
                                                var consultorio_id = $('#consultorio_select').val();
                                                //alert(consultorio_id);

                                                if(consultorio_id){
                                                    $.ajax({
                                                        url: "<?php echo e(url('/admin/horarios/consultorios/')); ?>" + '/' + consultorio_id,
                                                        type: 'GET',
                                                        success: function (data) {
                                                            $('#consultorio_info').html(data);
                                                        },
                                                        error: function () {
                                                            alert('Error al obtener los datos del consultorio java');
                                                        }
                                                    });
                                                }else{
                                                    $('#consultorio_info').html('');
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Doctores</label> <b>*</b>
                                        <select name="doctor_id" id="" class="form-control">
                                            <?php $__currentLoopData = $doctores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctore): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($doctore->id); ?>"><?php echo e($doctore->nombres." ".$doctore->apellidos." - ".$doctore->especialidad); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Día</label> <b>*</b>
                                        <select name="dia" id="" class="form-control">
                                            <option value="LUNES">LUNES</option>
                                            <option value="MARTES">MARTES</option>
                                            <option value="MIERCOLES">MIERCOLES</option>
                                            <option value="JUEVES">JUEVES</option>
                                            <option value="VIERNES">VIERNES</option>
                                            <option value="SABADO">SABADO</option>
                                            <option value="DOMINGO">DOMINGO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Hora Inicio</label> <b>*</b>
                                        <input type="time" value="<?php echo e(old('hora_inicio')); ?>" name="hora_inicio" class="form-control" required>
                                        <?php $__errorArgs = ['hora_inicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small style="color:red"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form group">
                                        <label for="">Hora Final</label> <b>*</b>
                                        <input type="time" value="<?php echo e(old('hora_fin')); ?>" name="hora_fin" class="form-control" required>
                                        <?php $__errorArgs = ['hora_fin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small style="color:red"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="<?php echo e(url('admin/horarios')); ?>" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Registrar nuevo</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <div id="consultorio_info">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mch\resources\views/admin/horarios/create.blade.php ENDPATH**/ ?>