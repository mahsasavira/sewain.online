<?php echo form_open('barang/add', array("class" => "form-horizontal")); ?>

<div class="form-group">
	<label for="NAMABARANG" class="col-md-4 control-label"><span class="text-danger">*</span>NAMABARANG</label>
	<div class="col-md-8">
		<input type="text" name="NAMABARANG" value="<?php echo $this->input->post('NAMABARANG'); ?>" class="form-control" id="NAMABARANG" />
		<span class="text-danger"><?php echo form_error('NAMABARANG'); ?></span>
	</div>
</div>
<div class="form-group">
	<label for="JENIS" class="col-md-4 control-label"><span class="text-danger">*</span>JENIS</label>
	<div class="col-md-8">
		<input type="text" name="JENIS" value="<?php echo $this->input->post('JENIS'); ?>" class="form-control" id="JENIS" />
		<span class="text-danger"><?php echo form_error('JENIS'); ?></span>
	</div>
</div>
<div class="form-group">
	<label for="DESKRIPSI" class="col-md-4 control-label"><span class="text-danger">*</span>DESKRIPSI</label>
	<div class="col-md-8">
		<input type="text" name="DESKRIPSI" value="<?php echo $this->input->post('DESKRIPSI'); ?>" class="form-control" id="DESKRIPSI" />
		<span class="text-danger"><?php echo form_error('DESKRIPSI'); ?></span>
	</div>
</div>
<div class="form-group">
	<label for="STATUS" class="col-md-4 control-label"><span class="text-danger">*</span>STATUS</label>
	<div class="col-md-8">
		<input type="text" name="STATUS" value="<?php echo $this->input->post('STATUS'); ?>" class="form-control" id="STATUS" />
		<span class="text-danger"><?php echo form_error('STATUS'); ?></span>
	</div>
</div>
<div class="form-group">
	<label for="HARGA" class="col-md-4 control-label"><span class="text-danger">*</span>HARGA</label>
	<div class="col-md-8">
		<input type="text" name="HARGA" value="<?php echo $this->input->post('HARGA'); ?>" class="form-control" id="HARGA" />
		<span class="text-danger"><?php echo form_error('HARGA'); ?></span>
	</div>
</div>
<div class="form-group">
	<label for="GAMBAR" class="col-md-4 control-label"><span class="text-danger">*</span>GAMBAR</label>
	<div class="col-md-8">
		<input type="text" name="GAMBAR" value="<?php echo $this->input->post('GAMBAR'); ?>" class="form-control" id="GAMBAR" />
		<span class="text-danger"><?php echo form_error('GAMBAR'); ?></span>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-4 col-sm-8">
		<button type="submit" class="btn btn-success">Save</button>
	</div>
</div>

<?php echo form_close(); ?>