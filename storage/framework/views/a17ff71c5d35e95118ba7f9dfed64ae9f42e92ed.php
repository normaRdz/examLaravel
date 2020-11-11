<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Beneficiario: <?php echo e($user); ?></h3>
                <h3>Donaciones totales: $<?php echo e($total); ?></h3>
            </div>
            <div class="card-body">
                <div>
                    <table class="table" id="listado">
                        <thead>
                                <tr>
                                    <th scope="col">Donador</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $donaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($donacion->nombre); ?> <?php echo e($donacion->apellidos); ?></th>
                                    <td>$<?php echo e($donacion->cantidad); ?></td>
                                    <td><?php echo e($donacion->fecha); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>tural lead-in to additional content.</p>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#listado').DataTable();
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/normarodriguez/Sites/prueba/resources/views/lista.blade.php ENDPATH**/ ?>