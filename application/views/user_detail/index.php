<div class="pull-right">
	<a href="<?php echo site_url('user_detail/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID DETAIL USER</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>KOTA</th>
		<th>STATUS</th>
		<th>ID USER</th>
		<th>KTP</th>
		<th>SIM</th>
		<th>KK</th>
		<th>KARTU PELAJAR</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_detail as $U){ ?>
    <tr>
		<td><?php echo $U['ID_DETAIL_USER']; ?></td>
		<td><?php echo $U['NAMA']; ?></td>
		<td><?php echo $U['ALAMAT']; ?></td>
		<td><?php echo $U['KOTA']; ?></td>
		<td><?php echo $U['STATUS']; ?></td>
		<td><?php echo $U['ID_USER']; ?></td>
		<td><?php echo $U['KTP']; ?></td>
		<td><?php echo $U['SIM']; ?></td>
		<td><?php echo $U['KK']; ?></td>
		<td><?php echo $U['KARTU_PELAJAR']; ?></td>
		<td>
            <a href="<?php echo site_url('user_detail/edit/'.$U['ID_DETAIL_USER']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user_detail/remove/'.$U['ID_DETAIL_USER']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
