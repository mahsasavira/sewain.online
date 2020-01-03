<?php echo form_open('sewaan/edit/'.$sewaan['ID_SEWAAN'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_BARANG" class="col-md-4 control-label">ID BARANG</label>
		<div class="col-md-8">
			<input type="text" name="ID_BARANG" value="<?php echo ($this->input->post('ID_BARANG') ? $this->input->post('ID_BARANG') : $sewaan['ID_BARANG']); ?>" class="form-control" id="ID_BARANG" />
		</div>
	</div>
	<div class="form-group">
		<label for="ID_USER" class="col-md-4 control-label">ID USER</label>
		<div class="col-md-8">
			<input type="text" name="ID_USER" value="<?php echo ($this->input->post('ID_USER') ? $this->input->post('ID_USER') : $sewaan['ID_USER']); ?>" class="form-control" id="ID_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="TARIF" class="col-md-4 control-label">TARIF</label>
		<div class="col-md-8">
			<input type="text" name="TARIF" value="<?php echo ($this->input->post('TARIF') ? $this->input->post('TARIF') : $sewaan['TARIF']); ?>" class="form-control" id="TARIF" />
		</div>
	</div>
	<div class="form-group">
		<label for="DURASI_SEWA" class="col-md-4 control-label">DURASI SEWA</label>
		<div class="col-md-8">
			<input type="text" name="DURASI_SEWA" value="<?php echo ($this->input->post('DURASI_SEWA') ? $this->input->post('DURASI_SEWA') : $sewaan['DURASI_SEWA']); ?>" class="form-control" id="DURASI_SEWA" />
		</div>
	</div>
	<div class="form-group">
		<label for="STATUS" class="col-md-4 control-label">STATUS</label>
		<div class="col-md-8">
			<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $sewaan['STATUS']); ?>" class="form-control" id="STATUS" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>