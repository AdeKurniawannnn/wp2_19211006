<?php
class Tugas_uts extends CI_Controller
{
    public function index()
    {
        $this->load->view('tugas_uts/view_form');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|min_length[3]',
            ['required' => 'Nama Siswa Harus diisi', 'min_lenght' => 'Nama terlalu pendek']
        );

        $this->form_validation->set_rules(
            'nis',
            'Nis',
            'required|min_length[3]',
            ['required' => 'Nomor Induk Siswa Harus diisi', 'min_lenght' => 'Nis terlalu pendek']
        );

        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required|min_length[1]',
            ['required' => 'Kelas Harus diisi', 'min_lenght' => 'Kelas terlalu pendek']
        );

        $this->form_validation->set_rules(
            'tanggal',
            'Tanggal Lahir',
            'required|min_length[3]',
            ['required' => 'Tanggal Lahir Harus diisi', 'min_lenght' => 'Tanggal Lahir terlalu pendek']
        );

        $this->form_validation->set_rules(
            'tempat',
            'Tempat Lahir',
            'required|min_length[3]',
            ['required' => 'Tempat Lahir Harus diisi', 'min_lenght' => 'Tempat Lahir terlalu pendek']
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[3]',
            ['required' => 'Alamat Harus diisi', 'min_lenght' => 'Alamat terlalu pendek']
        );

        $this->form_validation->set_rules(
            'jenis',
            'Jenis Kelamin',
            'required|min_length[1]|trim',
            ['required' => 'Jenis Kelamin Harus diisi', 'min_lenght' => 'Jenis Kelamin terlalu pendek']
        );

        $this->form_validation->set_rules(
            'agama',
            'Agama',
            'required|min_length[1]',
            ['required' => 'Agama Harus diisi', 'min_lenght' => 'Agama Harus Di Isi']
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('tugas_uts/view_form');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'jenis' => $this->input->post('jenis'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('tugas_uts/view_data', $data);
        }
    }
}
