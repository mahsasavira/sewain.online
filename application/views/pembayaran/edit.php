<?php echo form_open('pembayaran/edit/'.$pembayaran['ID_PEMBAYARAN'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_TRAKSAKSI" class="col-md-4 control-label">ID TRAKSAKSI</label>
		<div class="col-md-8">
			<input type="text" name="ID_TRAKSAKSI" value="<?php echo ($this->input->post('ID_TRAKSAKSI') ? $this->input->post('ID_TRAKSAKSI') : $pembayaran['ID_TRAKSAKSI']); ?>" class="form-control" id="ID_TRAKSAKSI" />
		</div>
	</div>
	<div class="form-group">
		<label for="STATUS" class="col-md-4 control-label">STATUS</label>
		<div class="col-md-8">
			<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $pembayaran['STATUS']); ?>" class="form-control" id="STATUS" />
		</div>
	</div>
	<div class="form-group">
		<label for="TGL_BAYAR" class="col-md-4 control-label">TGL BAYAR</label>
		<div class="col-md-8">
			<input type="text" name="TGL_BAYAR" value="<?php echo ($this->input->post('TGL_BAYAR') ? $this->input->post('TGL_BAYAR') : $pembayaran['TGL_BAYAR']); ?>" class="form-control" id="TGL_BAYAR" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>