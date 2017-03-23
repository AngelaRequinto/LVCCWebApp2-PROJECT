<!DOCTYPE html>
<html>
<head>
	<title>congratulations</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    position: center;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<body>
<center>
<h1>CONGRATULATIONS! you're already on the list!</h1>

    	<table border="1px solid black" style="width:60%; position: center;">
    		<tr>
    			<th>Firstname</th>
    			<th>Lastname</th>
    			<th>idNumber</th>
    			<th>Course</th>
    			<th>Address</th>
                <th></th>
                <th></th>
    		</tr>
            <tr>
            <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td><?php echo e($students->first_name); ?></td>
        <td><?php echo e($students->last_name); ?></td>
        <td><?php echo e($students->id_number); ?></td>
        <td><?php echo e($students->course); ?></td>
        <td><?php echo e($students->address); ?></td>
        <td>
        <form method="POST" action="/update">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id" value="<?php echo e($students->id); ?>">
        <input type="hidden" name="firstname" value="<?php echo e($students->first_name); ?>">
        <input type="hidden" name="lastname" value="<?php echo e($students->last_name); ?>">
        <input type="hidden" name="idNumber" value="<?php echo e($students->id_number); ?>">
        <input type="hidden" name="course" value="<?php echo e($students->course); ?>">
        <input type="hidden" name="address" value="<?php echo e($students->address); ?>">
        <button type="submit">Edit</button></td>
        </form>
        
        <td>
        <form method="POST" action="/delete">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="firstname" value="<?php echo e($students->first_name); ?>">
        <input type="hidden" name="lastname" value="<?php echo e($students->last_name); ?>">
        <input type="hidden" name="idNumber" value="<?php echo e($students->id_number); ?>">
        <input type="hidden" name="course" value="<?php echo e($students->course); ?>">
        <input type="hidden" name="address" value="<?php echo e($students->address); ?>">
        <button type="submit">Delete</button>
        </form>
        </td>
        </tr>
    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</table> 
    	

    	
    
</center>
</body>
</html>