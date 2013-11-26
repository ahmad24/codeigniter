<?php

$config = array(
             	


             	'roles' => array(array(
                                	'field'=>'name',
                                	'label'=>'Name',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'created',
                                	'label'=>'Created',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'modified',
                                	'label'=>'Modified',
                                	'rules'=>'required|trim|xss_clean'
                                ))
			   
			   
				,

				'users' => array(array(
                                	'field'=>'username',
                                	'label'=>'Username',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'password',
                                	'label'=>'Password',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'email',
                                	'label'=>'Email',
                                	'rules'=>'required|trim|valid_email|xss_clean'
                                ),
								array(
                                	'field'=>'role_id',
                                	'label'=>'Role_id',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'birthday',
                                	'label'=>'Birthday',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'created',
                                	'label'=>'Created',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'modified',
                                	'label'=>'Modified',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'deleted',
                                	'label'=>'Deleted',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'date_deleted',
                                	'label'=>'Date_deleted',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'version',
                                	'label'=>'Version',
                                	'rules'=>'required|trim|xss_clean'
                                ))
			   );
			   
?>