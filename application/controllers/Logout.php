<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Logout extends CI_Controller {
        
	public function __construct( ){
            parent::__construct();
            $this->load->model('module_user_register');
	}
        
	public function index()
	{
          // Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // Set message
            $this->session->set_flashdata('success', 'You are now logged out successfully');

            redirect('/login');
        }
                
        
}
