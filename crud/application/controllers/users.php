<?php

class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		$this->load->library('form_validation');		
		$this->load->helper(array('form','url','codegen_helper'));
		$this->load->model('codegen_model','',TRUE);
	}	
	
	function index(){
		$this->manage();
	}

	function manage(){
        $this->load->library('table');
        $this->load->library('pagination');
        
        //paging
        $config['base_url'] = base_url().'index.php/users/manage/';
        $config['total_rows'] = $this->codegen_model->count('users');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->codegen_model->get('users','id,username,password,email,role_id,birthday,created,modified,deleted,date_deleted,version','',$config['per_page'],$this->uri->segment(3));
       
        $this->load->view('templates/header', $this->data);
        
	    $this->load->view('users_list', $this->data); 
        $this->load->view('templates/footer', $this->data);
       //$this->template->load('content', 'users_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('users') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'username' => set_value('username'),
					'password' => set_value('password'),
					'email' => set_value('email'),
					'role_id' => set_value('role_id'),
					'birthday' => set_value('birthday'),
					'created' => set_value('created'),
					'modified' => set_value('modified'),
					'deleted' => set_value('deleted'),
					'date_deleted' => set_value('date_deleted'),
					'version' => set_value('version')
            );
           
			if ($this->codegen_model->add('users',$data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(base_url().'index.php/users/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}		   
		$this->load->view('templates/header', $this->data);
        
	    $this->load->view('users_add', $this->data); 
        $this->load->view('templates/footer', $this->data); 
        //$this->template->load('content', 'users_add', $this->data);
    }	
    
    function edit(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('users') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'email' => $this->input->post('email'),
					'role_id' => $this->input->post('role_id'),
					'birthday' => $this->input->post('birthday'),
					'created' => $this->input->post('created'),
					'modified' => $this->input->post('modified'),
					'deleted' => $this->input->post('deleted'),
					'date_deleted' => $this->input->post('date_deleted'),
					'version' => $this->input->post('version')
            );
           
			if ($this->codegen_model->edit('users',$data,'id',$this->input->post('id')) == TRUE)
			{
				redirect(base_url().'index.php/users/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->codegen_model->get('users','id,username,password,email,role_id,birthday,created,modified,deleted,date_deleted,version','id = '.$this->uri->segment(3),NULL,NULL,true);
		
		$this->load->view('templates/header', $this->data);
        
	    $this->load->view('users_edit', $this->data); 
        $this->load->view('templates/footer', $this->data);	
        //$this->template->load('content', 'users_edit', $this->data);
    }
	
    function delete(){
            $ID =  $this->uri->segment(3);
            $this->codegen_model->delete('users','id',$ID);             
            redirect(base_url().'index.php/users/manage/');
    }
}

/* End of file users.php */
/* Location: ./system/application/controllers/users.php */