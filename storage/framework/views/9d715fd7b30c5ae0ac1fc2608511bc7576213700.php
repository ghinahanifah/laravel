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

      <h2><?php echo e($title); ?></h2>
      <form action="<?php echo e((isset($berita))?route('berita.update', $berita->id):route('berita.store')); ?>" method="POST" enctype="multipart/from-data">
        <?php echo csrf_field(); ?>
        <?php if(isset($berita)): ?>
          <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="nama_barang" class="block text-sm font-medium text-gray-700" >
                  Nama Barang
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text"  id="nama_barang"  name="nama_barang" value="<?php echo e((isset($berita))?$berita->nama_barang:old('nama_barang')); ?>" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="harga_barang" class="block text-sm font-medium text-gray-700" >
                  harga Barang
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text"  id="harga_barang"  name="harga_barang" value="<?php echo e((isset($berita))?$berita->harga_barang:old('harga_barang')); ?>" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="jumlah_barang" class="block text-sm font-medium text-gray-700" >
                  Jumlah
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text" id="jumlah_barang"  name="jumlah_barang" value="<?php echo e((isset($berita))?$berita->jumlah_barang:old('jumlah_barang')); ?>" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
              </div>
            </div>
            

          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/admin/inputberita.blade.php ENDPATH**/ ?>