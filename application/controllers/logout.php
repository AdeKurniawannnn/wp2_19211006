<?php
defined('BASEPATH') or exit('No direct script access allowed');

class logout extends CI_Controller
{

    public function index()
    {
        // Hapus session login
        $this->session->unset_userdata('logged_in');

        // Redirect ke halaman login
        redirect('login');
    }
}
