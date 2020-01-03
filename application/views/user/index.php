<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID USER</th>
		<th>PASSWORD</th>
		<th>USERNAME</th>
		<th>EMAIL</th>
		<th>ROLE</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $U){ ?>
    <tr>
		<td><?php echo $U['ID_USER']; ?></td>
		<td><?php echo $U['PASSWORD']; ?></td>
		<td><?php echo $U['USERNAME']; ?></td>
		<td><?php echo $U['EMAIL']; ?></td>
		<td><?php echo $U['ROLE']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$U['ID_USER']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$U['ID_USER']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
