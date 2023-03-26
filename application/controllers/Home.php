<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
        $this->load->model('ModelBuku');
    }

    public function index()
    {
        $data = [
            'judul' => "Katalog Buku", 'buku' => $this->ModelBuku->getBuku()->result(),
        ];

        //jika sudah login dan jika belum login
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);

            $this->load->view('templates/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);

            $this->load->view('templates/templates-user/footer', $data);
        }
    }
    public function detailBuku()
    {

        $id = $this->uri->segment(3);
        $buku = $this->ModelBuku->detailbuku($id)->row_array();

        // pre($this->db->last_query());
        $data['user'] = "Pengunjung";
        $data['title'] = "Detail Buku";
        $data['buku'] = $buku;
        // foreach ($buku as $fields) {
        //     $data['judul'] = $fields['judul_buku'];
        //     $data['pengarang'] = $fields->pengarang;
        //     $data['penerbit'] = $fields->penerbit;
        //     $data['kategori'] = $fields->kategori;
        //     $data['tahun'] = $fields->tahun_terbit;
        //     $data['isbn'] = $fields->isbn;
        //     $data['image'] = $fields->image;
        //     $data['dipinjam'] = $fields->dipinjam;
        //     $data['dibooking'] = $fields->dibooking;
        //     $data['stok'] = $fields->stok;
        //     $data['id'] = $id;
        // }
        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('buku/detail-buku', $data);
        $this->load->view('templates/templates-user/footer');
    }
}
