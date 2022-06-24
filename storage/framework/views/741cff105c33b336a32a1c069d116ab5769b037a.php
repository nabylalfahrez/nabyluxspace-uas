<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product &raquo; <?php echo e($product->name); ?> &raquo; Gallery &raquo; Upload Photos
        </h2>
     <?php $__env->endSlot(); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <?php if($errors->any()): ?>
                <div class="mb-6" role="alert">
                    <div class="border-t-0 border-red-700 rounded-b bg-red-100 text-red-700 px-4 py-2">
                        There's something wrong!
                    </div>
                    <br>
                    <div class="border-t-0 border-red-700 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($errors); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </p>
                    </div>
                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('dashboard.product.gallery.store', $product->id)); ?>" class="w-full" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?> 
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-semibold mb-2">Name</label>
                            <input type="file" placeholder="Photos" multiple name="files[]" accept="image/*" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-50 focus:border-gray-300" >
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                           <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow-lg">
                               Save Product
                           </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\luxspace\resources\views/pages/dashboard/gallery/create.blade.php ENDPATH**/ ?>