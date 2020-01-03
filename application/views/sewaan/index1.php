<div class="pull-right">
	<a href="<?php echo site_url('sewaan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID SEWAAN</th>
		<th>ID BARANG</th>
		<th>ID USER</th>
		<th>TARIF</th>
		<th>DURASI SEWA</th>
		<th>STATUS</th>
		<th>Actions</th>
    </tr>
	<?php foreach($sewaan as $S){ ?>
    <tr>
		<td><?php echo $S['ID_SEWAAN']; ?></td>
		<td><?php echo $S['ID_BARANG']; ?></td>
		<td><?php echo $S['ID_USER']; ?></td>
		<td><?php echo $S['TARIF']; ?></td>
		<td><?php echo $S['DURASI_SEWA']; ?></td>
		<td><?php echo $S['STATUS']; ?></td>
		<td>
            <a href="<?php echo site_url('sewaan/edit/'.$S['ID_SEWAAN']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('sewaan/remove/'.$S['ID_SEWAAN']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
