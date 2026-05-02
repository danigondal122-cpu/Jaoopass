<?php $__env->startSection('main'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>List of Barcodes</h3>
                </div>

                <div class="card-body">
                    <!-- Check if there are barcodes -->
                    <?php if($barcodes->isEmpty()): ?>
                        <div class="alert alert-warning text-center">No barcodes found!</div>
                    <?php else: ?>
                        <!-- Table for displaying barcodes -->
                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                             <thead class="text-center">
                                <tr>
                                    <th>SL No</th>
                                    <th>Barcode</th>
                                    <th>Advance (Tk.)</th>
                                    <th>Balance (Tk)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $__currentLoopData = $barcodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barcode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($barcode->id); ?></td>
                                        <td>
                                            <!-- Display barcode image with higher DPI for better quality -->
                                            <img src="https://barcode.tec-it.com/barcode.ashx?data=<?php echo e($barcode->card_number); ?>&code=Code128&dpi=300" alt="Barcode for <?php echo e($barcode->card_number); ?>" style="width: 150px; height: auto;">
                                        </td>
                                        <td><?php echo e($barcode->advance); ?> Taka</td>
                                        <td><?php echo e($barcode->balance); ?> Taka</td>
                                        <td>
                                            <!-- Status display with badge styles -->
                                            <?php if($barcode->status == 'active'): ?>
                                                <span class="badge bg-success">Active</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Inactive</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <!-- Actions with icons -->
                                            <?php if($barcode->status == 'active'): ?>
                                                <a href="<?php echo e(route('barcode.toggleStatus', $barcode->id)); ?>" class="btn btn-warning btn-sm">
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('barcode.toggleStatus', $barcode->id)); ?>" class="btn btn-success btn-sm">
                                                    <i class="glyphicon glyphicon-ok-circle"></i>
                                                </a>
                                            <?php endif; ?>
                                        
                                            <!-- Barcode download button -->
                                            <a href="<?php echo e(route('barcode.download', $barcode->card_number)); ?>" class="btn btn-info btn-sm">
                                                <i class="glyphicon glyphicon-download"></i>
                                            </a>
                                        
                                            <!-- Delete button -->
                                            <form action="<?php echo e(route('barcode.destroy', $barcode->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script>

    function confirmDelete() {
        return confirm('Are you sure you want to delete this barcode?');
    }
</script>


<!-- DataTables JS -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fdeamvhp/jaoopass.com/resources/views/admin/qr/index.blade.php ENDPATH**/ ?>