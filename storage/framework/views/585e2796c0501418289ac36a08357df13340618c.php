<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.backend.card.card-form'); ?>
        <?php $__env->slot('action', route('setting.shippingUpdate')); ?>
        <?php $__env->slot('content'); ?>
            <div class="form-group">
                <label for="">Provinsi</label>
                <select name="province_id" id="province_id" class="form-control">
                    <?php $__currentLoopData = $data['provinces']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($province['province_id']); ?>" <?php echo e($data['setting']->province_id == $province['province_id'] ? 'selected' : ''); ?>><?php echo e($province['province']); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Kota/Kabupaten</label>
                <select name="city_id" id="city_id" class="form-control">
                    <?php $__currentLoopData = $data['city']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($city['city_id']); ?>" <?php echo e($data['setting']->city_id == $city['city_id'] ? 'selected' : ''); ?>><?php echo e($city['type']); ?> <?php echo e($city['city_name']); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary me-0" href="#">Simpan</button>
            </div>
            </div>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
         $('#province_id').on('change', function() {
            var provinceId = $('#province_id option:selected').val();
            $('#city_id').empty();
            $('#city_id').append('<option value="">-- Loading Data --</option>');
            $.ajax({
                url: '/rajaongkir/province/' + provinceId,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    if (data) {
                        $('#city_id').empty();
                        $('#city_id').removeAttr('disabled');
                        $('select[name="city_id"]').append(
                            'option value="" selected>-- Select City --</option>');
                        $.each(data, function(key, city) {
                            $('select[name="city_id"]').append('<option value="'+city.city_id+'">' + city.type + ' ' + city.city_name +
                                '</option>');
                        });
                    } else {
                        $('#city_id').empty();
                    }
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fawwazhe/yotakushop.my.id/resources/views/backend/setting/address.blade.php ENDPATH**/ ?>