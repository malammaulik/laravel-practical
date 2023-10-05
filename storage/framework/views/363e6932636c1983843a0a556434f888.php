
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 offset-md-3 mt-3">
        <h2>Login</h2>
        <?php if(session('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('message')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('error')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('login.process')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                <?php if($errors->has('email')): ?>
                    <div class="text-danger mt-2"><?php echo e($errors->first('email')); ?></div>
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
            <a href="<?php echo e(route('register')); ?>" class="text-end">Register Here</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel-demo\resources\views/login.blade.php ENDPATH**/ ?>