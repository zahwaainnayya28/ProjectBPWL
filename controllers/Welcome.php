<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function input()
	{
		$this->load->view('input');
	}

	public function aksiinput()
	{
		$nama_obat = $this->input->post('nama_obat');
		$harga_obat = $this->input->post('harga_obat');
		$jenis_obat = $this->input->post('jenis_obat');
        $dosis_obat = $this->input->post('dosis_obat');
        $jumlah_obat = $this->input->post('jumlah_obat');

		$datainput = array (
			'nama_obat' => $nama_obat,
			'harga_obat' => $harga_obat,
			'jenis_obat' => $jenis_obat,
            'dosis_obat' => $dosis_obat,
            'jumlah_obat' => $jumlah_obat

		);

		$this->m_model->insertobat($datainput);
		redirect (base_url('admin'));
	}

	public function aksiedit()
	{
		$kode_obat = $this->input->post('kode_obat');
		$nama_obat = $this->input->post('nama_obat');
		$harga_obat = $this->input->post('harga_obat');
		$jenis_obat = $this->input->post('jenis_obat');
        $dosis_obat = $this->input->post('dosis_obat');
        $jumlah_obat = $this->input->post('jumlah_obat');

		$dataedit = array (
			'nama_obat' => $nama_obat,
			'harga_obat' => $harga_obat,
			'jenis_obat' => $jenis_obat,
            'dosis_obat' => $dosis_obat,
            'jumlah_obat' => $jumlah_obat
		);

		$this->m_model->editobat($dataedit, $kode_obat);

		redirect (base_url('admin'));
	}

	public function aksidelete($kode_obat){
		$this->m_model->deleteobat($kode_obat);
		redirect(base_url('admin'));
	}
}
