<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register_user extends CI_Controller {
        
	public function __construct( ){
		 parent::__construct();
                 $this->load->model('module_user_register'); 
	}
        
	public function index()
	{
                $data = [];
                
                if(isset($_POST)){
                        $this->form_validation->set_rules('first_name', 'First Name', 'required');
                        $this->form_validation->set_rules('last_name', 'last Name', 'required');
                        $this->form_validation->set_rules('department', 'Department Name', 'required');
                        $this->form_validation->set_rules('user_name', 'User Name', 'required');
			//$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			//$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_emails');
			$this->form_validation->set_rules('user_password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[user_password]');
			$this->form_validation->set_rules('contact_no', 'Contact number', 'required');
                        
                        /*$this->form_validation->set_rules($rules);
			$this->form_validation->set_message('required',"Enter '%s'");
			$this->form_validation->set_error_delimiters('<p class="error">', '</p>');*/
                        if($this->form_validation->run() === false){ 
                            $data['first_name'] = $this->input->post('first_name');
                            $data['last_name'] = $this->input->post('last_name');
                            $data['department'] = $this->input->post('department');
                            $data['user_name'] = $this->input->post('user_name');
                            $data['email'] = $this->input->post('email'); 
                            $data['contact_no'] = $this->input->post('contact_no'); 
                        }
			if($this->form_validation->run() === true){
                           

                            $insertData = array(
                                'FIRST_NAME' => $this->input->post('first_name'),
                                'LAST_NAME' => $this->input->post('last_name'),
                                'DEPARTMENT' => $this->input->post('department'),
                                'USERNAME' => $this->input->post('user_name'),
                                'PASSWORD' => $this->input->post('user_password'),
                                'PHONE' => $this->input->post('contact_no'),
                                'EMAIL' => $this->input->post('email'),
                                'ADDED_ON' => Date('Y-m-d H:i:s'),
                            );
                          
                                $this->module_user_register->saveUser($insertData);
                                $this->session->set_flashdata('success' ,'User data save successfully');
                            redirect('/register_user');
                           $data['success'] = 'form submited successfully';
                        }
                }
                
		$this->load->view('layout/header'); 
		$this->load->view('register_user',$data);
                $this->load->view('layout/footer');
	}
        
        
}
