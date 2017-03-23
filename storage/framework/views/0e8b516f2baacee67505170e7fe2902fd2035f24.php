<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<?php $__currentLoopData = $unique; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uniques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($uniques->Name); ?><br>
	<?php echo e($uniques->Age); ?><br>
	<?php echo e($uniques->Course); ?><br>
	<?php echo e($uniques->StudentNmber); ?>

	<?php echo e($uniques->Email); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>