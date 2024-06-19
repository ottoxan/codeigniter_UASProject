<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_index');
        $this->load->view('webView/v_footer');
    }

    public function about() {
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_about');
        $this->load->view('webView/v_footer');
    }
    public function team() {
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_team');
        $this->load->view('webView/v_footer');
    }
    public function contact() {
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_contact');
        $this->load->view('webView/v_footer');
    }
    public function login() {
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_login');
        $this->load->view('webView/v_footer');
    }
    public function signup() {
        $this->load->view('webView/v_header');
        $this->load->view('webView/v_signup');
        $this->load->view('webView/v_footer');
    }

}