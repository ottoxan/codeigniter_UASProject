<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignupController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model('UserModel');
    }


    public function index(){
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_signup');
        $this->load->view('webView/v_footer');
    }

    function signup(){
        $this->form_validation->set_rules('email', 'Email ID','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');
        if ($this->form_validation->run() == FALSE) {
            // Failed
            $this->index();
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            $regiset_user = new UserModel;
            $checking = $regiset_user->registerUser($data);

            if ($checking) {
                $this->session->set_flashdata('status', 'Registered Successfully');
                redirect(base_url('login'));
            }else {
                $this->session->set_flashdata('status', 'Registered Failed');
                redirect(base_url('signup'));
            }
        }
    }

}

?>