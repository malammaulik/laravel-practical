
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 offset-md-3 mt-3">
        <h2>Register</h2>
        <form action="<?php echo e(route('register.process')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo e(old('name')); ?>">
                <?php if($errors->has('name')): ?>
                    <div class="text-danger mt-2"><?php echo e($errors->first('name')); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo e(old('email')); ?>">
                <?php if($errors->has('email')): ?>
                    <div class="text-danger mt-2"><?php echo e($errors->first('email')); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="phone_number" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number" value="<?php echo e(old('phone_number')); ?>">
                <?php if($errors->has('phone_number')): ?>
                    <div class="text-danger mt-2"><?php echo e($errors->first('phone_number')); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                <?php if($errors->has('password')): ?>
                    <div class="text-danger mt-2"><?php echo e($errors->first('password')); ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo e(route('login')); ?>" class="text-end">Login Here</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-demo\resources\views/register.blade.php ENDPATH**/ ?>