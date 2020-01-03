<?php echo form_open('transaksi_sewa/edit/'.$transaksi_sewa['ID_TRAKSAKSI'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_SEWAAN" class="col-md-4 control-label">ID SEWAAN</label>
		<div class="col-md-8">
			<input type="text" name="ID_SEWAAN" value="<?php echo ($this->input->post('ID_SEWAAN') ? $this->input->post('ID_SEWAAN') : $transaksi_sewa['ID_SEWAAN']); ?>" class="form-control" id="ID_SEWAAN" />
		</div>
	</div>
	<div class="form-group">
		<label for="ID_USER" class="col-md-4 control-label">ID USER</label>
		<div class="col-md-8">
			<input type="text" name="ID_USER" value="<?php echo ($this->input->post('ID_USER') ? $this->input->post('ID_USER') : $transaksi_sewa['ID_USER']); ?>" class="form-control" id="ID_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="TGL_TRANSAKSI" class="col-md-4 control-label">TGL TRANSAKSI</label>
		<div class="col-md-8">
			<input type="text" name="TGL_TRANSAKSI" value="<?php echo ($this->input->post('TGL_TRANSAKSI') ? $this->input->post('TGL_TRANSAKSI') : $transaksi_sewa['TGL_TRANSAKSI']); ?>" class="form-control" id="TGL_TRANSAKSI" />
		</div>
	</div>
	<div class="form-group">
		<label for="LAMA_SEWA" class="col-md-4 control-label">LAMA SEWA</label>
		<div class="col-md-8">
			<input type="text" name="LAMA_SEWA" value="<?php echo ($this->input->post('LAMA_SEWA') ? $this->input->post('LAMA_SEWA') : $transaksi_sewa['LAMA_SEWA']); ?>" class="form-control" id="LAMA_SEWA" />
		</div>
	</div>
	<div class="form-group">
		<label for="TOTAL_TARIF" class="col-md-4 control-label">TOTAL TARIF</label>
		<div class="col-md-8">
			<input type="text" name="TOTAL_TARIF" value="<?php echo ($this->input->post('TOTAL_TARIF') ? $this->input->post('TOTAL_TARIF') : $transaksi_sewa['TOTAL_TARIF']); ?>" class="form-control" id="TOTAL_TARIF" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>