<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
        <div>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="<?php echo e(route('employees.exportExcel')); ?>" class="btn btn-outline-success">
                        <i class="bi bi-download me-1"></i> to Excel
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="<?php echo e(route('employees.exportPdf')); ?>" class="btn btn-outline-danger">
                        <i class="bi bi-download me-1"></i> to PDF
                    </a>
                </li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item">
                    <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-1"></i> Create Employee
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3 mb-5">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="employeeTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Modul9\resources\views/employee/index.blade.php ENDPATH**/ ?>