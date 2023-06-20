<?php 

	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('cart');
		}

		function login(){
			$data['cart'] = $this->cart->contents();
			$this->load->view('template/header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/footer');

		}

		function act_login(){

			$wa= $this->input->post('wa');
			$pass = $this->input->post('pass');

			$cekwa= $this->db->get_where('tbl_register',['no_wa' => $wa])->row_array();
			if ($cekwa == true) {

				if ($cekwa['status'] == 0) {
					
					$this->session->set_flashdata('message', 'swal("Opps!", "kode otp anda belum aktif", "warning" );');
					redirect('auth/login');
				}else{
					if (password_verify($pass, $cekwa['pass'])) {

						$data = [
							'email' => $cekwa['email'],
							'name' => $cekwa['name'],
							'kode_user' => $cekwa['kode_user'],
						];
						$this->session->set_userdata($data);
						redirect('store/');
					}else{

						$this->session->set_flashdata('message', 'swal("Opps!", "password anda salah", "warning" );');
						redirect('auth/login');
					}	
				}
				
			}else{

				$this->session->set_flashdata('message', 'swal("Opps!", "akun anda tidak terdaftar", "warning" );');
				redirect('auth/login');
			}

		}

		function register(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('no_wa', 'whatsapp', 'required|numeric|max_length[13]|min_length[11]|is_unique[tbl_register.no_wa]');
			$this->form_validation->set_rules('email', 'email', 'required|is_unique[tbl_register.email]');
			$this->form_validation->set_rules('pass', 'password', 'required|min_length[6]');
			$this->form_validation->set_rules('pass1', 'confirm password', 'required|matches[pass]|min_length[6]');

			if ($this->form_validation->run() == false) {
				
				$data['cart'] = $this->cart->contents();
				$this->load->view('template/header', $data);
				$this->load->view('auth/register');
				$this->load->view('template/footer');
			}else{

				$otp = rand(10, 10000);
				$data = [
					'kode_user' => "user-".rand(10, 10000),
					'no_wa' => $this->input->post('no_wa'),
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
					'kode_otp' => $otp,
					'status' => 1
				];

				$input = $this->db->insert('tbl_register', $data);
				// $this->sendwa($this->input->post('no_wa'), $otp);
				$this->session->set_flashdata('message', 'swal("Yess", "Regiser anda berhasil", "success" );');
				// redirect('Auth/otp');
				redirect('Auth/login');
			}


			

		}

		// function sendemail($email, $otp){

		// 	$this->load->library('email');
		// 	$ci = get_instance();
		// 	$config['protocol'] = "SMTP";
		// 	$config['smtp_host'] = "mail.ratumerak.id";
		// 	$config['smtp_port'] = "465";
		// 	$config['smtp_user'] = "cs@ratumerak.id";
		// 	$config['smtp_pass'] = "ratumerak123";
		// 	$config['charset'] = "utf-8";
		// 	$config['mailtype'] = "html";
		// 	$config['newline'] = "\r\n";
		// 	$ci->email->initialize($config);


		// 	$this->email->from('cs@ratumerak.id', 'Ratumrakshop');
		// 	$this->email->to($email);

		// 	$this->email->subject('KODE OTP RATUMERAKSHOP');
		// 	$this->email->message("<p> Terima kasih sudah melakukan registrasi</p><p><b>KODE OTP : ". $otp."</p>");

		// 	if (!$this->email->send())
		// 		show_error($this->email->print_debugger());
		// 	else
		// 		echo 'Your e-mail has been sent!';
		// }



		function logout(){

			$this->session->unset_userdata('kode_user');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('name');
			$this->session->set_flashdata('keluar', 'keluar');
			redirect('auth/login');
			
			
		}

		function otp(){

			$data['cart'] = $this->cart->contents();
			$this->load->view('template/header', $data);
			$this->load->view('auth/otp');
			$this->load->view('template/footer');

		}

		function act_otp(){

			$otp = $this->input->post('otp');
			
			$cek = $this->db->get_where('tbl_register',['kode_otp' => $otp])->row_array();
			if ($cek == true) {
				$this->db->where('kode_user', $cek['kode_user']);
				$this->db->update('tbl_register',['status' => 1]);
				$this->session->set_flashdata('message', 'swal("Yess", "kode otp anda berhasil", "success" );');
				redirect('Auth/login');

			}else{
				$this->session->set_flashdata('otp', 'error" );');
				redirect('Auth/otp');
				
			}
		}


		function sendwa($wa, $otp){
		$api_key   = '2ad1c6ff045383d38f2ba7f13ad9d225f5794930'; // API KEY Anda
		$id_device = '6845'; // ID DEVICE yang di SCAN (Sebagai pengirim)
		$url   = 'https://api.watsap.id/send-message'; // URL API
		$no_hp = $wa; // No.HP yang dikirim (No.HP Penerima)
		$pesan = '😁 Terimakasi sudah melakukan registrasi 🙏. Kode OTP anda adalah : '.$otp; // Pesan yang dikirim

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
		curl_setopt($curl, CURLOPT_TIMEOUT, 0); // batas waktu response
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_POST, 1);

		$data_post = [
			'id_device' => $id_device,
			'api-key' => $api_key,
			'no_hp'   => $no_hp,
			'pesan'   => $pesan
		];
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data_post));
		curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		$response = curl_exec($curl);
		curl_close($curl);
		echo $response;
	}

	function email(){


		$this->load->library('email');
		$ci = get_instance();
		$config['protocol'] = "SMTPrerer";
		$config['smtp_host'] = "mail.rereratumerak.id";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "ratumerakshop@ratumererererak.id";
		$config['smtp_pass'] = "ratumeraktretrt123";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$ci->email->initialize($config);


		$this->email->from('ratumerakshop@ratumerak.id', 'Ratumrakshop');
		$this->email->to('nusadigital96@gmail.com');

		$this->email->subject('KODE OTP RATUMERAKSHOP');
		$this->email->message("Hello");

		if (!$this->email->send())
			echo show_error($this->email->print_debugger());
		else{
			echo 'Your e-mail has been sent!';
		}
		
	}


}
?>