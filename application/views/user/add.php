<?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="PASSWORD" class="col-md-4 control-label"><span class="text-danger">*</span>PASSWORD</label>
		<div class="col-md-8">
			<input type="password" name="PASSWORD" value="<?php echo $this->input->post('PASSWORD'); ?>" class="form-control" id="PASSWORD" />
			<span class="text-danger"><?php echo form_error('PASSWORD');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="USERNAME" class="col-md-4 control-label"><span class="text-danger">*</span>USERNAME</label>
		<div class="col-md-8">
			<input type="text" name="USERNAME" value="<?php echo $this->input->post('USERNAME'); ?>" class="form-control" id="USERNAME" />
			<span class="text-danger"><?php echo form_error('USERNAME');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="EMAIL" class="col-md-4 control-label"><span class="text-danger">*</span>EMAIL</label>
		<div class="col-md-8">
			<input type="text" name="EMAIL" value="<?php echo $this->input->post('EMAIL'); ?>" class="form-control" id="EMAIL" />
			<span class="text-danger"><?php echo form_error('EMAIL');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="ROLE" class="col-md-4 control-label">ROLE</label>
		<div class="col-md-8">
			<input type="text" name="ROLE" value="<?php echo $this->input->post('ROLE'); ?>" class="form-control" id="ROLE" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>