<?php
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
	function index(){
		$recordobat = $this->m_model->getdataobat();
		$data = array('dataobat' => $recordobat);
		$this->load->view('tampil',$data);
	}

	public function edit($id)
	{
		$recordobat = $this->m_model->getobatdetail($id);
		$data = array('dataobat'=>$recordobat);
		$this->load->view('edit',$data);
	}
}
?>