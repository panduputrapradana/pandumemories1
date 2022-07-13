<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('M_welcome', 'Mwelcome');
    }

	public function index()
	{
		$data['user'] = $this->Mwelcome->select();
		$this->load->view('index.php', $data);
	}

	public function tambah()
	{
		$this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id', 'Id', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);
        $this->form_validation->set_rules('kata', 'Kata', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('index.php');
            $this->load->library('form_validation');
        } else {

			$id       = $this->input->post('id');
			$nama     = $this->input->post('nama');
			$angkatan = $this->input->post('angkatan');
			$kata     = $this->input->post('kata');

            

            $user = array(
				'id'       => $id,
				'nama'     => $nama,
				'angkatan' => $angkatan,
				'kata'     => $kata

            );
            $this->db->insert('ucapan', $user);

            $this->session->set_flashdata('user', '<h1 class="text-sm lg:text-xl text-center uppercase text-yellow-700 mb-2 lg:mb-5" style="font-family: "Pacifico", cursive;">Ucapan terkirim!!!</h1>');
            $this->session->set_flashdata('hide', 'hidden');
            redirect('Welcome#ucapan');
        }
	}

	public function daftar()
	{
		$this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id', 'Id', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);
        $this->form_validation->set_rules('lulusan', 'Lulusan', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);
        $this->form_validation->set_rules('data', 'Data', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required|trim|min_length[1]|max_length[255]', [
            'required' => 'Nama lengkap wajib diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('index.php');
            $this->load->library('form_validation');
        } else {

			$id           = $this->input->post('id');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$lulusan      = $this->input->post('lulusan');
			$data         = $this->input->post('data');
			$ukuran       = $this->input->post('ukuran');

            

            $user = array(
				'id'       => $id,
				'nama_lengkap'     => $nama_lengkap,
				'lulusan' => $lulusan,
				'data'     => $data,
				'ukuran'     => $ukuran

            );
            $this->db->insert('daftar', $user);

            $this->session->set_flashdata('daftar', '<h1 class="text-sm lg:text-xl text-center uppercase text-yellow-700 mb-2 lg:mb-5" style="font-family: "Pacifico", cursive;">Data telah dimasukkan!!!</h1>');
            $this->session->set_flashdata('hide', 'hidden');
            redirect('Welcome#pendaftaran');
        }
	}

	public function print()
    {
 // panggil library yang kita buat sebelumnya yang bernama pdfgenerator$this->load->library('pdfgenerator');
        $this->load->library('pdfgenerator');
// title dari pdf
        $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';

// filename dari pdf ketika didownload
        $file_pdf = 'laporan_transaksi';
// setting paper
        $paper = 'A4';
//orientasi paper potrait / landscape
        $orientation = "portrait";
        $data['daftar'] = $this->Mwelcome->daftar();

        $html = $this->load->view('print',$data, true);

// run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation); 
    }
}
