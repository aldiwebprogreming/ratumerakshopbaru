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



			$email = $this->input->post('email');

			$pass = $this->input->post('pass');



			$cekemail = $this->db->get_where('tbl_register',['email' => $email])->row_array();

			if ($cekemail == true) {



				if ($cekemail['status'] == 0) {

					

					$this->session->set_flashdata('message', 'swal("Opps!", "kode otp anda belum aktif", "warning" );');

					redirect('auth/login');

				}else{

					if (password_verify($pass, $cekemail['pass'])) {



						$data = [

							'email' => $cekemail['email'],

							'name' => $cekemail['name'],

							'kode_user' => $cekemail['kode_user'],

						];

						$this->session->set_userdata($data);

						redirect('shop/');

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

					'name' => $this->input->post('name'),

					'email' => $this->input->post('email'),

					'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),

					'kode_otp' => $otp,

				];



				$input = $this->db->insert('tbl_register', $data);

				$email = $this->input->post('email');

				$this->sendemail($email, $otp);

				$this->session->set_flashdata('message', 'swal("Yess", "Regiser anda berhasil", "success" );');

				redirect('Auth/otp');

			}





			



		}



		function sendemail($email, $otp){

			$this->load->library('email');

			$ci = get_instance();

			$config['protocol'] = "SMTP";

			$config['smtp_host'] = "mail.ratumerak.id";

			$config['smtp_port'] = "465";

			$config['smtp_user'] = "ratumerakshop@ratumerak.id";

			$config['smtp_pass'] = "ratumerakshop123";

			$config['charset'] = "utf-8";

			$config['mailtype'] = "html";

			$config['newline'] = "\r\n";

			$ci->email->initialize($config);

			$this->email->from('ratumerakshop@ratumerak.id', 'Ratumrakshop');

			$this->email->to($email);



			$this->email->subject('KODE OTP RATUMERAKSHOP');

			$this->email->message("<p> Terima kasih sudah melakukan registrasi</p><p><b>KODE OTP : ". $otp."</p>");



			if (!$this->email->send())

				show_error($this->email->print_debugger());

			else

				echo 'Your e-mail has been sent!';

		}







		function logout(){



			$this->session->unset_userdata('kod_user');

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





		function sendwa(){

		$api_key   = '2ad1c6ff045383d38f2ba7f13ad9d225f5794930'; // API KEY Anda

		$id_device = '6845'; // ID DEVICE yang di SCAN (Sebagai pengirim)

		$url   = 'https://api.watsap.id/send-message'; // URL API

		$no_hp = '083854872915'; // No.HP yang dikirim (No.HP Penerima)

		$pesan = '😁 Halo Terimakasih 🙏'; // Pesan yang dikirim



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

	

	function index(){

		echo "hello";
	}




}

?>