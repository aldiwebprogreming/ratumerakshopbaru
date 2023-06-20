<?php 

	/**
	 * 
	 */
	class Shop extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('cart');
		}


		function index(){

			$this->db->select('*');
			$this->db->from('tbl_produk');
			$this->db->join('tbl_kategori', 'tbl_kategori.kode_kategori = tbl_produk.kategori');
			$data['produk'] = $this->db->get()->result_array();

			$data['cart'] = $this->cart->contents();

			$this->load->view('template/header', $data);
			$this->load->view('shop/index', $data);
			$this->load->view('template/footer');
		}

		function abaout(){

			$this->load->view('template/header');
			$this->load->view('shop/abaout');
			$this->load->view('template/footer');
		}

		function detail($produk){


			$this->db->select('*');
			$this->db->from('tbl_produk');
			$this->db->join('tbl_kategori', 'tbl_kategori.kode_kategori = tbl_produk.kategori');
			$this->db->where('kode_produk', $produk);
			$data['det'] = $this->db->get()->row_array();

			$this->db->select('*');
			$this->db->from('tbl_produk');
			$this->db->join('tbl_kategori', 'tbl_kategori.kode_kategori = tbl_produk.kategori');
			$data['produk'] = $this->db->get()->result_array();

			// $data['det'] = $this->db->get_where('tbl_produk',['kode_produk' => $produk])->row_array();
			// $data['kategori'] = $this->db->get_where('tbl_kategori',['kode_kategori' => $data['det']]['kategori'])->row_array();
			$this->load->view('template/header');
			$this->load->view('shop/detail', $data);
			$this->load->view('template/footer');

		}

		function add_cart(){
			$this->load->library('cart');
			$nama_produk = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$qty = $this->input->post('qty');
			$total_harga = $this->input->post('total_harga');

			$data = array(
				'id'      => $this->input->post('kode_produk'),
				'qty'     => $qty,
				'price'   => $harga,
				'name'    => $nama_produk,
				'total_harga' => $total_harga,
				
			);
			$cart = $this->cart->insert($data);

			$this->load->view('shop/cart');
			
		}

		function cart(){

			$kode_produk = $this->input->get('kode_produk');
			$produk = $this->db->get_where('tbl_produk',['kode_produk' => $kode_produk])->row_array();
			
			$total_harga = $this->input->get('harga') * $this->input->get('qty');
			$data = array(
				'id'      => $kode_produk,
				'qty'     => $this->input->get('qty'),
				'price'   => $this->input->get('harga'),
				'name'    => $produk['nama_produk'],
				'kategori'    => $produk['kategori'],
				'total_harga' => $total_harga,
				'gambar' => $produk['gambar'],
				
			);
			$cart = $this->cart->insert($data);
			$display = $this->cart->contents();
			echo count($display);
		}

		function cart2(){
			
			$display = $this->cart->contents();
			echo count($display);
		}

		function tampil_cart(){
			$data['cart'] = $this->cart->contents();
			$this->load->view('shop/tampil_cart', $data);
		}

		function hapus_cart(){

			$rowid = $this->input->get('id');
			$this->cart->remove($rowid);
			redirect('shop/index');
		}

		function hapus(){

			$cart = $this->cart->contents();
			foreach ($cart as $item) {
				$this->cart->remove($item['rowid']);
			}
			
		}

		function cart_detail(){
			$data['cart'] = $this->cart->contents();
			$this->load->view('template/header');
			$this->load->view('shop/cart_detail', $data);
			$this->load->view('template/footer');
		}

		// function checkout2(){
		
		
		// }

		function checkout(){

			$produk = $this->input->post('produk');
			$jml = count($produk);

			$kode_order = "order-".rand(10, 10000);
			$kode_produk = $this->input->post('kode_produk');
			$kode_user = $this->session->kode_user;
			$nama_produk = $this->input->post('produk');
			$kategori = $this->input->post('kategori');
			$harga = $this->input->post('harga');
			$qty = $this->input->post('qty');


			$total_pembayaran = 0;

			for ($i=0; $i < $jml ; $i++) { 

				$total_pembayaran += $harga[$i] * $qty[$i];
				$data = [

					'kode_order' => $kode_order,
					'kode_produk' => $kode_produk[$i],
					'kode_user' => $kode_user,
					'nama_produk' => $nama_produk[$i],
					'kategori' => $kategori[$i],
					'harga' => $harga[$i],
					'qty' => $qty[$i],
					'total_harga' => $harga[$i] * $qty[$i],
					'type_order' => 'website',
				];

				$input = $this->db->insert('tbl_order', $data);
			}

			$this->db->where('kode_order', $kode_order);
			$update = $this->db->update('tbl_order',['total_pembayaran' => $total_pembayaran]);

			if ($update == true) {

				$config['upload_path']          = './assets/ktp/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['min_size']             = 9000000;
				$config['remove_spaces']        = false;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('ktp')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Ops!!", "format gambar tidak sesuai", "warning" );');
					redirect("shop/cart_detail");

				}else{

					$alamat = $this->input->post('alamat');
					if ($alamat == null) {
						$alamat = '';
					}else{
						$alamat = $this->input->post('alamat');
					}

					$pembayaran1 = $this->input->post('inlineRadioOptions');
					$pembayaran2 = $this->input->post('inlineRadioOptions');

					if($pembayaran1 == null){
						$pembayaran = $pembayaran2;
					}else{

						$pembayaran = $pembayaran1;
					}

					$data = [

						'kode_user' => $kode_user,
						'kode_order' => $kode_order,
						'wa' => $this->input->post('wa'),
						// 'tgl_pengantaran' => $this->input->post('tgl_pengantaran'),
						'sistem_pengambilan' => $this->input->post('sistem_pengambilan'),
						'alamat_pengantaran' => $alamat,
						'jumlah_pembayaran' => $total_pembayaran,
						'status_pembayaran' => 0,
						'sistem_pembayaran' => $pembayaran,
						'type_order' => 'website',
						'ktp' => $_FILES['ktp']['name'],
					];

					$this->db->insert('tbl_checkout', $data);
					$this->hapus();
					$this->notiforder();
					$this->session->set_flashdata('message', 'swal("Yess", "Checkout anda berhasil", "success" );');
					redirect('shop/order');
				}

			}


		}

		function totalpembayaran(){

			$rowid = $this->input->get('id');
			$total = $this->input->get('totalharga');

			$data = [
				'rowid' => $rowid,
				'total_harga' => $total
			];

			$this->cart->update($data);
			$cart =  $this->cart->contents();

			$totalharga = 0;
			foreach ($cart as $update) {

				$totalharga += $update['total_harga'];

			}

			echo "Rp " . number_format($totalharga,0,',','.');
		}


		function order(){
			$kode_user = $this->session->kode_user;
			$this->db->order_by('id','desc');
			$this->db->where_not_in('status_order', '4');
			$data['order'] = $this->db->get_where('tbl_checkout',['kode_user' => $kode_user])->result_array();
			$this->load->view('template/header');
			$this->load->view('shop/order', $data);
			$this->load->view('template/footer');

		}


		function act_login(){

			$email = $this->input->post('email');
			$pass = $this->input->post('pass');

			$cekemail = $this->db->get_where('tbl_register',['email' => $email])->row_array();
			if ($cekemail == true) {

				if ($cekemail['status'] == 0) {

					$this->session->set_flashdata('message', 'swal("Opps!", "kode otp anda belum aktif", "warning" );');
					redirect('shop/cart_detail');
				}else{
					if (password_verify($pass, $cekemail['pass'])) {

						$data = [
							'email' => $cekemail['email'],
							'name' => $cekemail['name'],
							'kode_user' => $cekemail['kode_user'],
						];
						$this->session->set_userdata($data);
						$this->session->set_flashdata('message', 'swal("Yess!", "login anda berhasil", "success" );');
						redirect('shop/cart_detail');
					}else{

						$this->session->set_flashdata('message', 'swal("Opps!", "password anda salah", "warning" );');
						redirect('shop/cart_detail');
					}	
				}

			}else{

				$this->session->set_flashdata('message', 'swal("Opps!", "akun anda tidak terdaftar", "warning" );');
				redirect('shop/cart_detail');
			}

		}

		function pembayaran($kode_order){

			$data['cart'] = $this->cart->contents();
			$data['bayar'] = $this->db->get_where('tbl_checkout',['kode_order' => $kode_order])->row_array();
			$this->load->view('template/header');
			$this->load->view('shop/pembayaran',$data);
			$this->load->view('template/footer');

		}

		function konfirmasi_pembayaran($kode_order){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('kode_order', 'kode order', 'required');
			$this->form_validation->set_rules('tgl_pembayaran', 'tgl pembayaran', 'required');
			$this->form_validation->set_rules('bank_pengirim', 'bank pengirim', 'required');
			$this->form_validation->set_rules('nama_rekening', 'nama rekening', 'required');
			$this->form_validation->set_rules('jumlah_pembayaran', 'jumlah pembayaran', 'required');


			if ($this->form_validation->run() == false) {


				$data['order'] = $this->db->get_where('tbl_checkout',['kode_order' => $kode_order])->row_array();
				$data['kode_order'] = $kode_order;

				$this->load->view('template/header');
				$this->load->view('shop/konfirmasi_pembayaran',$data);
				$this->load->view('template/footer');

			}else{

				$config['upload_path']          = './assets/bukti/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['min_size']             = 9000000;
				$config['remove_spaces']        = false;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('bukti')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Ops!!", "format gambar tidak sesuai", "warning" );');
					redirect("shop/pembayaran/$kode_order");

				}else{

					$cek_konfirmasi = $this->db->get_where('tbl_bukti_pembayaran',['kode_order' => $kode_order])->row_array();

					if ($cek_konfirmasi == true) {

						$this->session->set_flashdata('message', 'swal("Ops!", "konfirmasi pembayaran sudah pernah dilakukan", "error" );');
						redirect("shop/pembayaran/$kode_order");

					}

					$data = [

						'kode_user' => $this->session->kode_user,
						'kode_order' => $this->input->post('kode_order'),
						'tgl_pembayaran' => $this->input->post('tgl_pembayaran'),
						'bank_pengirim' => $this->input->post('bank_pengirim'),
						'nama_rekening' => $this->input->post('nama_rekening'),
						'jumlah_pembayaran' => $this->input->post('jumlah_pembayaran'),
						'pesan' => $this->input->post('pesan_tambahan'),
						'bukti_pembayaran' => $_FILES['bukti']['name'],
						'status' => 0,

					];

					$this->db->insert('tbl_bukti_pembayaran', $data);

					$this->db->where('kode_order', $this->input->post('kode_order'));
					$this->db->update('tbl_checkout', ['bukti' => 1]);

				}

				$this->session->set_flashdata('message', 'swal("Yess!", "data berhasil dikirim", "success" );');
				redirect("shop/order");

			}




		}

		function cekorder(){

			$kode = $this->input->get('kode');
			$cek = $this->db->get_where('tbl_checkout',['kode_order' => $kode])->row_array();
			if ($kode == '') {
				echo ' <small id="emailHelp" class="form-text text-muted">Masukan kode order anda untuk melihat jumlah pembayaran yang harus di lakukan </small>';
			}else{
				if ($cek == true) {

					echo '<div class="alert alert-success mt-2 text-center" role="alert">
					<i class="fa fa-check-circle-o" aria-hidden="true"></i> Kode order yang anda masukan benar.
					</div>';
				}else{
					echo '<div class="alert alert-danger mt-2 text-center" role="alert">
					<i class="fa fa-times-circle-o" aria-hidden="true"></i> Kode order yang anda masukan salah.
					</div>';
				}
			}
		}

		function produk($slug){
			$kate = $this->db->get_where('tbl_kategori',['slug' => $slug])->row_array();
			// $data['produk'] = $this->db->get_where('tbl_produk',['kategori' => $kate['kode_kategori']])->result_array();

			$this->db->select('*');
			$this->db->from('tbl_produk');
			$this->db->where('kategori', $kate['kode_kategori']);
			$this->db->join('tbl_kategori', 'tbl_kategori.kode_kategori = tbl_produk.kategori');
			$data['produk'] = $this->db->get()->result_array();

			$data['cart'] = $this->cart->contents();

			$data['kategori'] = $kate['nama_kategori'];

			$this->load->view('template/header');
			$this->load->view('shop/product', $data);
			$this->load->view('template/footer');
		}


		function cancel_order($kode){

			$this->db->where('kode_order', $kode);
			$this->db->update('tbl_checkout',['status_order' => 4]);
			$this->session->set_flashdata('message', 'swal("Yess!", "Order barhasil di cancel", "success" );');
			redirect("shop/order");

		}

		function notiforder(){


			$api_key   = '2ad1c6ff045383d38f2ba7f13ad9d225f5794930'; // API KEY Anda
			$id_device = '117'; // ID DEVICE yang di SCAN (Sebagai pengirim)
			$url   = 'https://api.watsap.id/send-message'; // URL API
			$no_hp = '083138184143'; // No.HP yang dikirim (No.HP Penerima)
			$pesan = '😁 Cek admin untuk lihat order terbaru 🙏'; // Pesan yang dikirim

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


		function join(){
			
			$this->db->select('*');
			$this->db->from('tbl_order');
			$this->db->join('tbl_checkout', 'tbl_checkout.kode_order = tbl_order.kode_order');
			$query = $this->db->get()->result_array();

			var_dump($query);


		}

		function order_wa2(){

			$kode_order = 'order-'.rand(0, 10000);

			$pembayaran1 = $this->input->post('inlineRadioOptions');
			$pembayaran2 = $this->input->post('inlineRadioOptions');

			if($pembayaran1 == null){
				$pembayaran = $pembayaran2;
			}else{

				$pembayaran = $pembayaran1;
			}

			$data = [
				'kode_user' => $this->input->post('nama'),
				'kode_order' => $kode_order,
				'wa' => $this->input->post('wa'),
						// 'tgl_pengantaran' =>  $this->input->post('tgl_pengantaran'),
				'sistem_pengambilan' => 'Sistem Antar',
				'alamat_pengantaran' =>  $this->input->post('alamat_pengantaran'),
				'jumlah_pembayaran' =>  $this->input->post('total_harga'),
				'status_pembayaran' => 0,
				'status_order' => 0,
				'sistem_pembayaran' => $pembayaran,
				'bukti' => 0,
				'ktp' => 'images.png',
				'type_order' => 'whatsapp',
			];

			$cekout = $this->db->insert('tbl_checkout', $data);

			if ($cekout == true) {


				$kode_produk = $this->input->post('kode_produk');
				$kode_user = 'order-wa';
				$nama_produk = $this->input->post('nama_produk');
				$kategori = $this->input->post('kategori');
				$harga = $this->input->post('harga');
				$qty = $this->input->post('qtywa');
				$data = [

					'kode_order' => $kode_order,
					'kode_produk' => $kode_produk,
					'kode_user' => $this->input->post('nama'),
					'nama_produk' => $nama_produk,
					'kategori' => $kategori,
					'harga' => $harga,
					'qty' => $qty,
					'total_harga' => $harga * $qty,
					'total_pembayaran' => $harga * $qty,
					'type_order' => 'whatsapp',
				];

				$input = $this->db->insert('tbl_order', $data);
				redirect("shop/whatsapp/$kode_order");

			}
		}





		function order_wa(){

			$kode_order = 'order-'.rand(0, 10000);
			$kode_produk = $this->input->post('kode_produk');
			$kode_user = 'order-wa';
			$nama_produk = $this->input->post('nama_produk');
			$kategori = $this->input->post('kategori');
			$harga = $this->input->post('harga');
			$qty = $this->input->post('qtywa');
			$data = [

				'kode_order' => $kode_order,
				'kode_produk' => $kode_produk,
				'kode_user' => $this->input->post('nama'),
				'nama_produk' => $nama_produk,
				'kategori' => $kategori,
				'harga' => $harga,
				'qty' => $qty,
				'total_harga' => $harga * $qty,
				'total_pembayaran' => $harga * $qty,
				'type_order' => 'whatsapp',
			];

			$input = $this->db->insert('tbl_order', $data);

			if ($input) {

				$config['upload_path']          = './assets/ktp/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['min_size']             = 9000000;
				$config['remove_spaces']        = false;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('ktp')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Ops!!", "format gambar tidak sesuai", "warning" );');
					redirect("shop/index");

				}else{

					$pembayaran1 = $this->input->post('inlineRadioOptions');
					$pembayaran2 = $this->input->post('inlineRadioOptions');

					if($pembayaran1 == null){
						$pembayaran = $pembayaran2;
					}else{

						$pembayaran = $pembayaran1;
					}

					$data = [
						'kode_user' => $this->input->post('nama'),
						'kode_order' => $kode_order,
						'wa' => $this->input->post('wa'),
						// 'tgl_pengantaran' =>  $this->input->post('tgl_pengantaran'),
						'sistem_pengambilan' => 'Sistem Antar',
						'alamat_pengantaran' =>  $this->input->post('alamat_pengantaran'),
						'jumlah_pembayaran' =>  $this->input->post('total_harga'),
						'status_pembayaran' => 0,
						'status_order' => 0,
						'sistem_pembayaran' => $pembayaran,
						'bukti' => 0,
						'ktp' => $_FILES['ktp']['name'],
						'type_order' => 'whatsapp',
					];

					$cekout = $this->db->insert('tbl_checkout', $data);

					redirect("shop/whatsapp/$kode_order");

				}	

			}		
		}


		function whatsapp($kode){

			$order1 = $this->db->get_where('tbl_checkout',['kode_order' => $kode])->row_array();
			$order2 = $this->db->get_where('tbl_order',['kode_order' => $kode])->row_array();

			$nama = $order2['kode_user'];
			$alamat_pengantaran = $order1['alamat_pengantaran'];
			$produk = $order2['nama_produk'];
			$qty = $order2['qty'];
			$total_harga = $order2['total_pembayaran'];
			$sistem_pengambilan = $order1['sistem_pengambilan'];
			$sistem_pembayaran = $order1['sistem_pembayaran'];
			$ktp = $order1['ktp'];

			$url = "https://api.whatsapp.com/send?phone=6281264646575&text=Nama: $nama, Alamat pengantaran : $alamat_pengantaran, Produk : $produk, Qty : $qty, Total harga : $total_harga, sistem_pengambilan : $sistem_pengambilan, sistem_pembayaran : $sistem_pembayaran, ktp : $ktp";
			echo $url;

			redirect($url);


			// redirect("https://api.whatsapp.com/send?phone=6283138184143&text=Nama:  $order2['kode_user'], Alamat pengantaran : $order1['alamat_pengantaran'] , Produk :  $order2['nama_produk'], Qty:  $order2['qty'], Total harga :  $order2['total_pembayaran'], Sistem pengambilan :  $order1['sistem_pengambilan'], Sistem pembayaran :  $order1['sistem_pembayaran']");

		}

	}

?>