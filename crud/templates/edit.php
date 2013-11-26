<div class="row">
	<div class="col-md-3">
      <?php //echo $this->element('main_menu');?>	
    </div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo "Edit";//echo __('Edit Role'); ?></h3>
			</div>
			<div class="panel-body">
			<?php     

			echo form_open(current_url(),array('class'=>'form-horizontal')); ?>
			<?php echo $custom_error; ?>
			{primary}
			{forms_inputs}
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<?php echo form_submit( 'submit', 'Submit','class="btn btn-default"'); ?>
				</div>
			</div>

			<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
