

<div class="row">
	<div class="col-md-3">
      <?php //echo $this->element('main_menu');?>	
    </div>
	<div class="col-md-8 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
			  <h3 class="panel-title"><?php echo "Add";//echo __('Edit Role'); ?></h3>
			</div>
			<div class="panel-body">
			<?php     

			echo form_open(current_url(),array('class'=>'form-horizontal')); ?>
			<?php echo $custom_error; ?>
			
			
                                        <div class="form-group"><label class="col-sm-2 control-label" for="name">Name<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="name" type="text" name="name" value="<?php echo set_value('name'); ?>"  />
                                        <?php echo form_error('name','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="created">Created<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="created" type="text" name="created" value="<?php echo set_value('created'); ?>"  />
                                        <?php echo form_error('created','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="modified">Modified<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="modified" type="text" name="modified" value="<?php echo set_value('modified'); ?>"  />
                                        <?php echo form_error('modified','<div>','</div>'); ?>
                                        </div></div>
                                        
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
