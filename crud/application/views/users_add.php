

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
			
			
                                        <div class="form-group"><label class="col-sm-2 control-label" for="username">Username<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="username" type="text" name="username" value="<?php echo set_value('username'); ?>"  />
                                        <?php echo form_error('username','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="password">Password<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="password" type="password" name="password" value="<?php echo set_value('password'); ?>"  />
                                        <?php echo form_error('password','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="email">Email<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="email" type="password" name="email" value="<?php echo set_value('email'); ?>"  />
                                        <?php echo form_error('email','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="role_id">Role_id<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="role_id" type="text" name="role_id" value="<?php echo set_value('role_id'); ?>"  />
                                        <?php echo form_error('role_id','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="birthday">Birthday<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="birthday" type="text" name="birthday" value="<?php echo set_value('birthday'); ?>"  />
                                        <?php echo form_error('birthday','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="created">Created<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="created" type="text" name="created" value="<?php echo set_value('created'); ?>"  />
                                        <?php echo form_error('created','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="modified">Modified<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="modified" type="text" name="modified" value="<?php echo set_value('modified'); ?>"  />
                                        <?php echo form_error('modified','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="deleted">Deleted<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="deleted" type="text" name="deleted" value="<?php echo set_value('deleted'); ?>"  />
                                        <?php echo form_error('deleted','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="date_deleted">Date_deleted<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="date_deleted" type="text" name="date_deleted" value="<?php echo set_value('date_deleted'); ?>"  />
                                        <?php echo form_error('date_deleted','<div>','</div>'); ?>
                                        </div></div>
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label" for="version">Version<span class="required">*</span></label>                                
                                        <div class="col-sm-10" ><input class="form-control" id="version" type="text" name="version" value="<?php echo set_value('version'); ?>"  />
                                        <?php echo form_error('version','<div>','</div>'); ?>
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
