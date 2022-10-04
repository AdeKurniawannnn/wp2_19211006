<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('web_template/v_header', $data);
        $this->load->view('web_template/v_index', $data);
        $this->load->view('web_template/v_footer', $data);
        //$this->load->view('web_template/v_gabung', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman about";
        $this->load->view('web_template/v_header', $data);
        $this->load->view('web_template/v_about', $data);
        $this->load->view('web_template/v_footer', $data);
    }
}
