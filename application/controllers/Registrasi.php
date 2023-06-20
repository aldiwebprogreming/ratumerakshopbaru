<?php 

	/**
	 * 
	 */
	class Registrasi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){
			$data['kab'] = $this->db->get_where('tbl_kabupaten', ['province_id' => 12])->result_array();
			$this->load->view('regis/index', $data);
		}

		function add_regis(){

			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'alamat_toko' => $this->input->post('alamat_toko'),
				'nik' => $this->input->post('nik'),
				'deposit' => $this->input->post('deposit'),
			];

			$this->db->insert('tbl_registrasi_bisnis', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Registras anda berhasil", "success");');
			redirect('Registrasi/');
		}

		function get_kecseller(){
			$idkec = $this->input->get('id');
			$data['kec'] = $this->db->get_where('tbl_kecamatan', ['regency_id' => $idkec])->result_array();
			$this->load->view('regis/getkec', $data);
		}

		function get_kelseller(){

			$idkel = $this->input->get('id');
			$data['kel'] = $this->db->get_where('tbl_kelurahan', ['district_id' => $idkel])->result_array();
			var_dump($data['kel']);
			$this->load->view('regis/getkel', $data);
		}
	}

?>