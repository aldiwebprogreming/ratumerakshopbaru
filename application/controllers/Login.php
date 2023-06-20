<?php 

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('login/index');
		}

		function act_login(){

			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$this->db->where('username', $username);
			$cek = $this->db->get('tbl_admin')->row_array();
			if ($cek == true) {
				
				if (password_verify($pass,$cek['pass'])) {
					
					$data = [
						'username' => $username,
					];
					$this->session->set_userdata($data);
					redirect('admin/');
				}else{

					$this->session->set_flashdata('message', 'swal("Opps!", "password anda salah", "warning" );');
					redirect('login/');
				}
			}else{

				$this->session->set_flashdata('message', 'swal("Opps!", "Akun anda tidak terdaftar", "error" );');
				redirect('login/');
			}
		}


		function logout(){
			$this->session->unset_userdata('username');
			$this->session->set_flashdata('message', 'swal("Yess!", "Anda berhasil logout", "success" );');
			redirect('login/');
		}
	}

?>