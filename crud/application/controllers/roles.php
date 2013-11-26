<?php

class Roles extends CI_Controller {
    
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
        $config['base_url'] = base_url().'index.php/roles/manage/';
        $config['total_rows'] = $this->codegen_model->count('roles');
        $config['per_page'] = 3;	
        $this->pagination->initialize($config); 	
        // make sure to put the primarykey first when selecting , 
		//eg. 'userID,name as Name , lastname as Last_Name' , Name and Last_Name will be use as table header.
		// Last_Name will be converted into Last Name using humanize() function, under inflector helper of the CI core.
		$this->data['results'] = $this->codegen_model->get('roles','id,name,created,modified','',$config['per_page'],$this->uri->segment(3));
       
        $this->load->view('templates/header', $this->data);
        
	    $this->load->view('roles_list', $this->data); 
        $this->load->view('templates/footer', $this->data);
       //$this->template->load('content', 'roles_list', $this->data); // if have template library , http://maestric.com/doc/php/codeigniter_template
		
    }
	
    function add(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('roles') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'name' => set_value('name'),
					'created' => set_value('created'),
					'modified' => set_value('modified')
            );
           
			if ($this->codegen_model->add('roles',$data) == TRUE)
			{
				//$this->data['custom_error'] = '<div class="form_ok"><p>Added</p></div>';
				// or redirect
				redirect(base_url().'index.php/roles/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';

			}
		}		   
		$this->load->view('templates/header', $this->data);
        
	    $this->load->view('roles_add', $this->data); 
        $this->load->view('templates/footer', $this->data); 
        //$this->template->load('content', 'roles_add', $this->data);
    }	
    
    function edit(){        
        $this->load->library('form_validation');    
		$this->data['custom_error'] = '';
		
        if ($this->form_validation->run('roles') == false)
        {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);

        } else
        {                            
            $data = array(
                    'name' => $this->input->post('name'),
					'created' => $this->input->post('created'),
					'modified' => $this->input->post('modified')
            );
           
			if ($this->codegen_model->edit('roles',$data,'id',$this->input->post('id')) == TRUE)
			{
				redirect(base_url().'index.php/roles/manage/');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';

			}
		}

		$this->data['result'] = $this->codegen_model->get('roles','id,name,created,modified','id = '.$this->uri->segment(3),NULL,NULL,true);
		
		$this->load->view('templates/header', $this->data);
        
	    $this->load->view('roles_edit', $this->data); 
        $this->load->view('templates/footer', $this->data);	
        //$this->template->load('content', 'roles_edit', $this->data);
    }
	
    function delete(){
            $ID =  $this->uri->segment(3);
            $this->codegen_model->delete('roles','id',$ID);             
            redirect(base_url().'index.php/roles/manage/');
    }
}

/* End of file roles.php */
/* Location: ./system/application/controllers/roles.php */