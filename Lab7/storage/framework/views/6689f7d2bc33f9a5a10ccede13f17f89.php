
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IT Student Portal</title>
</head>
<body>
    <h1>Login to your account</h1>

    <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <p><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login.store')); ?>">
        <?php echo csrf_field(); ?>

        <label for="email">Email</label>
        <input id="email" name="email" type="email"
               value="<?php echo e(old('email')); ?>" required>
        <br><br>

        <label for="password">Password</label>
        <input id="password" name="password" type="password"
               required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <p>
        <a href="<?php echo e(route('register')); ?>">Create an account</a>
    </p>
</body>
</html>
<?php /**PATH C:\Users\dell\Downloads\Lab6\resources\views/auth/login.blade.php ENDPATH**/ ?>