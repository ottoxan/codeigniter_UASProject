<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pageController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Authentication');
        $this->load->model('m_data');
        $this->load->library('session');
        $this->load->library('welcome');
        $this->load->library('pagination');
        $this->load->model('m_paging');

    }

    public function userpage(){
        $jumlah_data = $this->m_paging->jumlah_data();
        $config['base_url'] = base_url('').'pageController/userpage';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['student'] = $this->m_paging->data_paging($config['per_page'],$from);
        //$data['student'] = $this->m_data->ambil_data()->result();
        $this->load->view('adminView/v_headerUser',array('error' => ' '));
        $this->load->view('adminView/v_userpage',$data);
    }

    public function create(){
        $this->load->view('adminView/v_headerUser');
        $this->load->view('adminView/v_create',array('error' => ' '));
    }

    public function tambah_aksi() {
        $nama       = $this->input->post('nama_student');
        $alamat     = $this->input->post('alamat_student');
        $course     = $this->input->post('course_student');

        
        $data = array(
            'nama_student'      => $nama,
            'alamat_student'    => $alamat,
            'course_student'    => $course,
            );
            
            $config['upload_path']      = './assets/uploudedPics/';
            $config['allowed_types']    ='gif|jpg|png';
            //$config['max_size']         ='100';
            //$config['max_width']        ='1024';
            //$config['max_height']       ='768';
            $config['file_name'] = $nama.$alamat;
            $config['encrypt_name']     = FALSE;
    
            $this->load->library('upload', $config);


            if (!empty($_FILES['berkas']['name'])) {
                $config['upload_path']      = './assets/uploudedPics/';
                $config['allowed_types']    = 'gif|jpg|png';
                $this->load->library('upload', $config);

                // Check if the file already exists
                $file_name = $_FILES['berkas']['name'];
                $file_path = $config['upload_path'] . $file_name;
                if (file_exists($file_path)) {
                    $error = array('error' => 'File already exists');
                    $this->load->view('adminView/v_headerUser');
                    $this->load->view('adminView/v_create', $error);
                } else {
                    if (!$this->upload->do_upload('berkas')) {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('adminView/v_headerUser');
                        $this->load->view('adminView/v_create', $error);
                    }
                }
            }

            $input = $this->m_data->input_data($data);
            if ($input) {
                $this->session->set_flashdata('message','Data berhasil ditambahkan');
            } else {
                $this->session->set_flashdata('error','Gagal menambahkan data');
            }
            redirect('userpage');

                
        }

        function hapus($id) {
        $where = array('id_student' => $id);
        $delete = $this->m_data->hapus_data($id);

        if ($delete) {
            $this->session->set_flashdata('message','Data ID'.$id.' berhasil dihapus');
        } else {
            $this->session->set_flashdata('error','Gagal menghapus data ID'.$id);
        }
        redirect('userpage');
    }

        function edit($id) {
        $data['student'] = $this->m_data->getById($id);

        $this->load->view('adminView/v_headerUser');        
        $this->load->view('adminView/v_edit',$data);
    }

    function update() {
        $id         = $this->input->post('id_student');
        $nama       = $this->input->post('nama_student');
        $alamat     = $this->input->post('alamat_student');
        $course     = $this->input->post('course_student');


        $data = array(
            'nama_student'         => $nama,
            'alamat_student'       => $alamat,
            'course_student'        => $course,
        );

        

        $update = $this->m_data->update_data($data, $id);
        if ($update) {
            $this->session->set_flashdata('message', 'Data berhasil diubah');

        }else {
            $this->session->set_flashdata('error', 'Gagal mengubah data');
        }

        $config['upload_path']      = './assets/uploudedPics/';
        $config['allowed_types']    ='gif|jpg|png';
        //$config['max_size']         ='100';
        //$config['max_width']        ='1024';
        //$config['max_height']       ='768';
        $config['file_name'] = $nama.$alamat;

        $this->load->library('upload', $config);


            if (!empty($_FILES['berkas']['name'])) {
                $config['upload_path']      = './assets/uploudedPics/';
                $config['allowed_types']    = 'gif|jpg|png';
                $this->load->library('upload', $config);

                // Check if the file already exists
                $file_name = $_FILES['berkas']['name'];
                $file_path = $config['upload_path'] . $file_name;
                if (file_exists($file_path)) {
                    $error = array('error' => 'File already exists');
                    $this->load->view('adminView/v_headerUser');
                    $this->load->view('adminView/v_create', $error);
                } else {
                    if (!$this->upload->do_upload('berkas')) {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('adminView/v_headerUser');
                        $this->load->view('adminView/v_create', $error);
                    }
                }
            }

        redirect('userpage');
    }

    function download($id) {
        $this->load->helper('download');

        $data['student'] = $this->m_data->getById($id);
        $nama = $data['student']->nama_student;
        $alamat = $data['student']->alamat_student;

        $file_path = './assets/uploudedPics/'. $nama. $alamat.'.png';
        $file_info = pathinfo($file_path);


        if (!file_exists($file_path)) {
            $error = array('error' => 'File not found');
            $this->session->set_flashdata('error', $error);
            redirect('userpage');
        } else {
            force_download($file_path, null);
        }
    }



}