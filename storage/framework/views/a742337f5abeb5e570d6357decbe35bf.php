<h1>Home</h1>





<?php if(session()->get('status')): ?>
<h1><?php echo e(session()->get('status')); ?></h1>
<?php else: ?>
 <h1><?php echo e("no status"); ?></h1>
<?php endif; ?><?php /**PATH C:\Users\USER\Desktop\Ostad Classes\PHP_BATCH6\M17_C1\migrations-session-log\resources\views/home.blade.php ENDPATH**/ ?>