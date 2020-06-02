<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('module_user_register');
        if ($this->session->userdata('logged_in')) {
            redirect('/');
        }
    }

    public function index() {

        $data = [];

        if (isset($_POST)) {

            $this->form_validation->set_rules('user_name', 'User Name', 'required');
            $this->form_validation->set_rules('user_password', 'Password', 'required');

            /* $this->form_validation->set_rules($rules);
              $this->form_validation->set_message('required',"Enter '%s'");
              $this->form_validation->set_error_delimiters('<p class="error">', '</p>'); */
            if ($this->form_validation->run() === false) {
                $data['user_name'] = $this->input->post('user_name');
                $data['user_password'] = $this->input->post('user_password');
            }
            if ($this->form_validation->run() === true) {



                $checkUserData = $this->module_user_register->checkUserLogin();

                if (!empty($checkUserData)) {
                    $this->session->set_flashdata('success', 'Login successfully');
                    $user_data = array(
                        'user_id' => $checkUserData['ID'],
                        'username' => $checkUserData['USERNAME'],
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    redirect('/');
                } else {
                    $this->session->set_flashdata('error', 'please enter valid user name and password.');
                    //redirect('/');
                }
            }
        }

        $this->load->view('layout/header');
        $this->load->view('login', $data);
        $this->load->view('layout/footer');
    }

}
