<?php $__env->startSection('title'); ?>
    Users
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Users</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($users['nama']); ?></td>
                <td><?php echo e($users['kelas']); ?></td>
                <td><?php echo e($users['Alamat']); ?></td>                
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>   
<?php $__env->stopSection(); ?>





   


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/clone_laravel_parsinta/resources/views/users.blade.php ENDPATH**/ ?>