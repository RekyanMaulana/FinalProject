<?php $__env->startSection('content'); ?>  
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="index.php?url=product_form" class="btn btn-primary btn-sm"> Tambah </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Price</th>
                                            <th>Stok</th>
                                            <th>Penjual</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Price</th>
                                            <th>Stok</th>
                                            <th>Penjual</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($no); ?></td>
                                            <td><?php echo e($prod->nama); ?></td>
                                            <td><?php echo e($prod->jenis); ?></td>
                                            <td><?php echo e($prod->price); ?></td>
                                            <td><?php echo e($prod->stok); ?></td>
                                            <td><?php echo e($prod->penjual); ?></td>
                                            <td>
                                                <form action="#" method="post">
                                                    <a class="btn btn-info btn-sm" href="#">Detail</a>
                                                    <a class="btn btn-warning btn-sm" href="#">Ubah</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin data ini akan dihapus?')">Hapus</button>
                                                    <input type="hidden" name="idx" value="">
                                                </form>
                                            </td>
                                        </tr>
                                        <?php 
                                        $no++
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FinalProject\resources\views/admin/product/index.blade.php ENDPATH**/ ?>