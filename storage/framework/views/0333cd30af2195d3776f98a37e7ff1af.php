<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 26/6/2024
 * Time: 15:21
 */
?>

<h3><center><b>Horario de atención del consultorio de <?php echo e($consultorio->nombre); ?></b></center></h3>
<hr>
<table style="font-size: 15px;text-align: center" class="table table-striped table-hover table-sm table-bordered">
    <thead>
    <tr style="text-align: center">
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sábado</th>
        <th>Domingo</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $horas = ['08:00:00 - 09:00:00','09:00:00 - 10:00:00','10:00:00 - 11:00:00','11:00:00 - 12:00:00','12:00:00 - 13:00:00','13:00:00 - 14:00:00','14:00:00 - 15:00:00','15:00:00 - 16:00:00','16:00:00 - 17:00:00','17:00:00 - 18:00:00','18:00:00 - 19:00:00','19:00:00 - 20:00:00'];
        $diasSemana = ['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO'];
    ?>
    <?php $__currentLoopData = $horas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            list($hora_inicio,$hora_fin) = explode(' - ',$hora);
        ?>
        <tr>
            <td><?php echo e($hora); ?></td>
            <?php $__currentLoopData = $diasSemana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $nombre_doctor = '';
                    foreach ($horarios as $horario){
                        if(strtoupper($horario->dia) == $dia &&
                         $hora_inicio >= $horario->hora_inicio &&
                         $hora_fin <= $horario->hora_fin ){
                         $nombre_doctor = $horario->doctor->nombres." ".$horario->doctor->apellidos;
                         break;
                        }
                    }
                ?>
                <td><?php echo e($nombre_doctor); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\mch\resources\views/cargar_datos_consultorio.blade.php ENDPATH**/ ?>