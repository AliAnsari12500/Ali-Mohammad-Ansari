
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - IT Student Portal</title>
</head>
<body>
    <h1>Create an account</h1>

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

    <form method="POST" action="<?php echo e(route('register.store')); ?>">
        <?php echo csrf_field(); ?>

        <label for="name">Full name</label>
        <input id="name" name="name" type="text"
               value="<?php echo e(old('name')); ?>" required>
        <br><br>

        <label for="email">Email</label>
        <input id="email" name="email" type="email"
               value="<?php echo e(old('email')); ?>" required>
        <br><br>

        <label for="password">Password</label>
        <input id="password" name="password" type="password"
               minlength="8" required>
        <br><br>

        <label for="password_confirmation">Confirm password</label>
        <input id="password_confirmation"
               name="password_confirmation"
               type="password" minlength="8" required>
        <br><br>

        <button type="submit">Register</button>
    </form>

    <p>
        <a href="<?php echo e(route('login')); ?>">Already have an account?</a>
    </p>
</body>
</html>
<?php /**PATH C:\Users\dell\Downloads\Lab6\resources\views/auth/register.blade.php ENDPATH**/ ?>