<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; #<?php echo e($transaction->id); ?> <?php echo e($transaction->name); ?>

        </h2>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('script', null, []); ?> 
        <script>
        var datatable = $('#crudTable').DataTable({
            ajax: {
                url: '<?php echo url()->current(); ?>'
            },
            columns: [
                { data: 'id', name:'id', width: '5%'},
                { data: 'product.name', name:'product.name'},
                { data: 'product.price', name:'product.price'}
            ]
        })
        </script>
     <?php $__env->endSlot(); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                Transaction Details
            </h2>

            <div class="div bg-white overflow-hidden shadow sm:rounded-lg mb-10">
                <div class="div p-6 bg-white border-gray-200">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <th class="border px-6 py-4 text-right">Name</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->name); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Email</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->email); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Address</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->address); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Phone</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->phone); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Courier</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->courier); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Payment</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->payment); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Payment URL</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->payment_url); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Total Price</th>
                                <td class="border px-6 py-4"><?php echo e(number_format($transaction->total_price)); ?></td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Status</th>
                                <td class="border px-6 py-4"><?php echo e($transaction->status); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                Transaction Item
            </h2>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-6 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\luxspace\resources\views/pages/dashboard/transaction/show.blade.php ENDPATH**/ ?>