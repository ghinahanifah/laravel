<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> <?php echo e($title); ?>

                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Barang</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Merek Barang</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Barang</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php $no =1;?>
                                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($no); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($item->nama_barang); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($item->harga_barang); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($item->jumlah_barang); ?></td>
                                    <td>
                                    <button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
                                hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none"> 
                                <a href=" <?php echo e(route('berita.edit',$item->id)); ?>">Edit </a>
                                </button>|
                                

                                 <form action="<?php echo e(route('berita.destroy', $item->id)); ?>" method="POST">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('DELETE'); ?>
                                  
                                  <button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
                                hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Hapus</button>
                                </form>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
                                  <div class="grid grid-cols-12">
                                <div class="col-span-6 p-4">
                                <a href="<?php echo e(route('berita.create')); ?>"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
                                hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah<button></a>
                    </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/admin/beranda.blade.php ENDPATH**/ ?>