<div class="pull-right">
	<a href="<?php echo site_url('pembayaran/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID PEMBAYARAN</th>
		<th>ID TRAKSAKSI</th>
		<th>STATUS</th>
		<th>TGL BAYAR</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pembayaran as $P){ ?>
    <tr>
		<td><?php echo $P['ID_PEMBAYARAN']; ?></td>
		<td><?php echo $P['ID_TRAKSAKSI']; ?></td>
		<td><?php echo $P['STATUS']; ?></td>
		<td><?php echo $P['TGL_BAYAR']; ?></td>
		<td>
            <a href="<?php echo site_url('pembayaran/edit/'.$P['ID_PEMBAYARAN']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pembayaran/remove/'.$P['ID_PEMBAYARAN']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
