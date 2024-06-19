<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');

        if ($this->session->has_userdata('authenticated')) {
            $this->session->set_flashdata('status', 'You are already logged in');
            redirect(base_url('userpage'));
        }

    }


    public function index(){
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_login');
        $this->load->view('webView/v_footer');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email ID','trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password','trim|required');
        if ($this->form_validation->run() == FALSE) {
            // Failed
            //$this->index();
        }else{
            $data = [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];

            $user = new UserModel;
            $result = $user->loginUser($data);
            if ($result != FALSE) {
                $auth_userdetails = [
                    'id' => $result->id,
                    'username' => $result->username,
                    'email' => $result->email,
                    'password' => $result->password,
                ];

                $this->session->set_userdata('authenticated','1');
                $this->session->set_userdata('auth_user',$auth_userdetails);

                $this->session->set_flashdata('status', 'Logged In');
                redirect(base_url('userpage'));

            } else {
                $this->session->set_flashdata('status', 'Invalid Email or Password');
                redirect(base_url('login'));
            }

        }
    }

}

?>