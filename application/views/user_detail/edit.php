<?php echo form_open('user_detail/edit/'.$user_detail['ID_DETAIL_USER'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="NAMA" class="col-md-4 control-label">NAMA</label>
		<div class="col-md-8">
			<input type="text" name="NAMA" value="<?php echo ($this->input->post('NAMA') ? $this->input->post('NAMA') : $user_detail['NAMA']); ?>" class="form-control" id="NAMA" />
		</div>
	</div>
	<div class="form-group">
		<label for="ALAMAT" class="col-md-4 control-label">ALAMAT</label>
		<div class="col-md-8">
			<input type="text" name="ALAMAT" value="<?php echo ($this->input->post('ALAMAT') ? $this->input->post('ALAMAT') : $user_detail['ALAMAT']); ?>" class="form-control" id="ALAMAT" />
		</div>
	</div>
	<div class="form-group">
		<label for="KOTA" class="col-md-4 control-label">KOTA</label>
		<div class="col-md-8">
			<input type="text" name="KOTA" value="<?php echo ($this->input->post('KOTA') ? $this->input->post('KOTA') : $user_detail['KOTA']); ?>" class="form-control" id="KOTA" />
		</div>
	</div>
	<div class="form-group">
		<label for="STATUS" class="col-md-4 control-label">STATUS</label>
		<div class="col-md-8">
			<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $user_detail['STATUS']); ?>" class="form-control" id="STATUS" />
		</div>
	</div>
	<div class="form-group">
		<label for="ID_USER" class="col-md-4 control-label">ID USER</label>
		<div class="col-md-8">
			<input type="text" name="ID_USER" value="<?php echo ($this->input->post('ID_USER') ? $this->input->post('ID_USER') : $user_detail['ID_USER']); ?>" class="form-control" id="ID_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="KTP" class="col-md-4 control-label">KTP</label>
		<div class="col-md-8">
			<input type="text" name="KTP" value="<?php echo ($this->input->post('KTP') ? $this->input->post('KTP') : $user_detail['KTP']); ?>" class="form-control" id="KTP" />
		</div>
	</div>
	<div class="form-group">
		<label for="SIM" class="col-md-4 control-label">SIM</label>
		<div class="col-md-8">
			<input type="text" name="SIM" value="<?php echo ($this->input->post('SIM') ? $this->input->post('SIM') : $user_detail['SIM']); ?>" class="form-control" id="SIM" />
		</div>
	</div>
	<div class="form-group">
		<label for="KK" class="col-md-4 control-label">KK</label>
		<div class="col-md-8">
			<input type="text" name="KK" value="<?php echo ($this->input->post('KK') ? $this->input->post('KK') : $user_detail['KK']); ?>" class="form-control" id="KK" />
		</div>
	</div>
	<div class="form-group">
		<label for="KARTU_PELAJAR" class="col-md-4 control-label">KARTU PELAJAR</label>
		<div class="col-md-8">
			<input type="text" name="KARTU_PELAJAR" value="<?php echo ($this->input->post('KARTU_PELAJAR') ? $this->input->post('KARTU_PELAJAR') : $user_detail['KARTU_PELAJAR']); ?>" class="form-control" id="KARTU_PELAJAR" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>