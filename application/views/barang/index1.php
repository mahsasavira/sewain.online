<div class="pull-right">
	<a href="<?php echo site_url('barang/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID BARANG</th>
		<th>NAMABARANG</th>
		<th>JENIS</th>
		<th>DESKRIPSI</th>
		<th>STATUS</th>
		<th>HARGA</th>
		<th>GAMBAR</th>
		<th>Actions</th>
    </tr>
	<?php foreach($barang as $B){ ?>
    <tr>
		<td><?php echo $B['ID_BARANG']; ?></td>
		<td><?php echo $B['NAMABARANG']; ?></td>
		<td><?php echo $B['JENIS']; ?></td>
		<td><?php echo $B['DESKRIPSI']; ?></td>
		<td><?php echo $B['STATUS']; ?></td>
		<td><?php echo $B['HARGA']; ?></td>
		<td><?php echo $B['GAMBAR']; ?></td>
		<td>
            <a href="<?php echo site_url('barang/edit/'.$B['ID_BARANG']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('barang/remove/'.$B['ID_BARANG']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
