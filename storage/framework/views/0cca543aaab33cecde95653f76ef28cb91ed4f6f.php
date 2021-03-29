<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e($title); ?>

        </h2><br>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-2 sm:py-1 sm:br-gray-100">
          <div class="grid grid-cols-12">

          </div>
        <div class="shadow overflow-hidden border-b boorder-gray-200 sm:rounded-lg m-1">
        <table class="min-w-full divide-y divide-gray-200 p-3">
          <thead class="bg-gray-50">
              <tr class="text-lg " >
                  <th class="w-1">Tandai </th>
                  <th>No</th>
                  <th>Barang Terjual</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th>AKSI</th>
              </tr>
              </thead>
          <tbody class=" text-center bg-white divide-y divide-gray-200">
          <?php $no=1; ?>
            <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($item->nama); ?></td>
                    <td><?php echo e($item->harga_barang); ?></td>
                    <td align="center">
                      <img src="<?php echo e(asset('storage/' .$item->gambar)); ?>" class="w-16" alt="">
                    </td>
                    <td>
                        <form action="<?php echo e(route('laporan.destroy',$item->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                         <a href="<?php echo e(route('laporan.edit',$item->id)); ?>" class="btn btn-xs p-2 rounded bg-green-200 m-3 hover:bg-blue hover:text-blue-900">Edit</a>
                          <button type="submit" class="btn btn-xs p-2 rounded bg-red-500 m-3 hover:bg-red hover:text-white-900">Del</button>
                        </form>
                    </td>
              </tr>
                <?php $no++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <div class="col-span-6 p-4">
              <a href="<?php echo e(route('laporan.create')); ?>"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
              hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah<button></a>
           </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/admin/berandalaporan.blade.php ENDPATH**/ ?>