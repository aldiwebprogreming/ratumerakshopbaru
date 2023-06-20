<?php 

	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if ($this->session->username == null) {
				redirect('login/');
			}
		}

		function index(){

			$data['user'] = $this->db->get('tbl_register')->num_rows();
			$data['order'] = $this->db->get('tbl_checkout')->num_rows();
			// $data['admin'] = $this->db->get('tbl_admin')->num_rows();
			$data['produk'] = $this->db->get('tbl_produk')->num_rows();

			$this->db->select_sum('total_harga');
			$data['pemasukan_all'] = $this->db->get('tbl_order')->row_array();

			$this->db->like('date', date('Y-m-d'));
			$data['order_hari_ini'] = $this->db->get('tbl_checkout')->num_rows();

			$this->load->view('template_admin/header');
			$this->load->view('admin/index', $data);
			$this->load->view('template_admin/footer');
		}

		function data_produk(){


			$this->db->select('*');
			$this->db->from('tbl_produk');
			$this->db->join('tbl_kategori', 'tbl_kategori.kode_kategori = tbl_produk.kategori');
			$data['produk'] = $this->db->get()->result_array();

			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/data_produk', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_produk(){

			$config['upload_path']          = './assets/img/products/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Opps", "file gambar anda tidak suport", "warning" );');
				redirect('admin/data_produk');

			}else{

				$data = [
					'kode_produk' => 'produk-'.rand(0,100000),
					'nama_produk' => $this->input->post('nama_produk'),
					'kategori' => $this->input->post('kategori'),
					'harga' => $this->input->post('harga'),
					'ket' => $this->input->post('ket'),
					'gambar' => $_FILES['gambar']['name'],
				];

				$this->db->insert('tbl_produk', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Produk berhasil ditambah", "success" );');
				redirect('admin/data_produk');
			}
		}

		function hapus_produk(){

			$id = $this->input->post('id');
			$this->db->where('kode_produk', $id);
			$this->db->delete('tbl_produk');

			$this->session->set_flashdata('message', 'swal("Yess!", "Produk berhasil dihapus", "success" );');
			redirect('admin/data_produk');
		}

		function edit_produk(){

			$config['upload_path']          = './assets/img/products/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;

			if ($_FILES['gambar']['name'] == null) {
				$data = [

					'nama_produk' => $this->input->post('nama_produk'),
					'kategori' => $this->input->post('kategori'),
					'harga' => $this->input->post('harga'),
					'ket' => $this->input->post('ket'),
				];

				$kode_produk = $this->input->post('kode_produk');
				$this->db->where('kode_produk', $kode_produk);
				$this->db->update('tbl_produk', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Produk berhasil diubah", "success" );');
				redirect('admin/data_produk');
			}else{

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Opps", "file gambar anda tidak suport", "warning" );');
					redirect('admin/data_produk');

				}else{

					$data = [

						'nama_produk' => $this->input->post('nama_produk'),
						'kategori' => $this->input->post('kategori'),
						'harga' => $this->input->post('harga'),
						'ket' => $this->input->post('ket'),
						'gambar' => $_FILES['gambar']['name'],
					];

					$kode_produk = $this->input->post('kode_produk');
					$this->db->where('kode_produk', $kode_produk);
					$this->db->update('tbl_produk', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Produk berhasil diubah", "success" );');
					redirect('admin/data_produk');
				}
			}

			
		}

		function data_kategori(){

			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/data_kategori', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_kategori(){

			$kode = "KT-".rand(0,1000);
			$nama_kategori = $this->input->post('nama_kategori');     
			$slug = str_replace(" ", "-", $nama_kategori);
			$slug = ucwords($slug);

			$data = [
				'kode_kategori' => $kode,
				'nama_kategori' => $nama_kategori,
				'slug' => strtolower($slug),
			];

			$this->db->insert('tbl_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Kategori berhasil ditambah", "success" );');
			redirect('admin/data_kategori');
		}

		function hapus_kategori(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_kategori');
			$this->session->set_flashdata('message', 'swal("Yess!", "Kategori berhasil dihapus", "success" );');
			redirect('admin/data_kategori');
		}

		function edit_kategori(){

			$data = [
				'nama_kategori' => $this->input->post('nama_kategori'),
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('tbl_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Kategori berhasil diedit", "success" );');
			redirect('admin/data_kategori');
		}


		function data_user(){

			$data['user'] = $this->db->get('tbl_register')->result_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/data_user', $data);
			$this->load->view('template_admin/footer');
		}

		function hapus_user(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_register');
			$this->session->set_flashdata('message', 'swal("Yess!", "User berhasil dihapus", "success" );');
			redirect('admin/data_user');
		}

		function ubah_status_user(){

			$id = $this->input->post('id');
			$status = $this->input->post('status');

			if ($status == 1) {
				$st = 0;
			}else{
				$st = 1;
			}

			$this->db->where('id', $id);
			$this->db->update('tbl_register',['status' => $st]);
			$this->session->set_flashdata('message', 'swal("Yess!", "User berhasil diupdate", "success" );');
			redirect('admin/data_user');
		}

		function ubah_status2(){

			echo $kode_order = $this->input->post('kode_order');
			$wa = $this->input->post('wa');
			$status = $this->input->post('status');
			$data = [
				'status_order' => $this->input->post('status')
			];
			$this->db->where('kode_order', $kode_order);
			$this->db->update('tbl_checkout', $data);

			$this->sentwa_status($status, $wa);
			$this->session->set_flashdata('message', 'swal("Yess!", "Status pembayaran sudah diupdate", "success" );');
			redirect("admin/data_order/");
		}

		function sentwa_status($status, $wa){

			if ($status == 1) {
				
				$pesan2 = 'Pesanan beras anda sedang Prosess Packing';
			}elseif ($status == 2) {
				
				$pesan2 = 'Pesanan beras anda sedang Proses Pengantaran';
			}elseif ($status == 3){
				$pesan2 = "Pesanan beras anda telah Selesai";
			}else{

				$pesan2 = "Pesanan beras anda telah Cancel";
			}

			$api_key   = '2ad1c6ff045383d38f2ba7f13ad9d225f5794930'; // API KEY Anda
			$id_device = '117'; // ID DEVICE yang di SCAN (Sebagai pengirim)
			$url   = 'https://api.watsap.id/send-message'; // URL API
			$no_hp = $wa; // No.HP yang dikirim (No.HP Penerima)
			$pesan = $pesan2; // Pesan yang dikirim

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

		function data_order(){

			// $data['order'] = $this->db->get('tbl_order')->result_array();

			// $this->db->select_sum('total_harga');
			// $data['total'] = $this->db->get('tbl_order')->row_array();

			// $this->db->order_by('id', 'DESC');
			$data['order'] = $this->db->get('tbl_checkout')->result_array();

			$this->load->view('template_admin/header');
			$this->load->View('admin/data_order', $data);
			$this->load->view('template_admin/footer');
		}

		function data_order_hari_ini(){

			$this->db->like('date', date('Y-m-d'));
			$data['order'] = $this->db->get('tbl_checkout')->result_array();

			$this->load->view('template_admin/header');
			$this->load->View('admin/data_order_hari_ini', $data);
			$this->load->view('template_admin/footer');
		}

		function detail_order($kode_order){

			$data['order'] = $this->db->get_where('tbl_checkout',['kode_order' => $kode_order])->row_array();

			$data['detail_order'] = $this->db->get_where('tbl_order',['kode_order' => $kode_order])->result_array();

			$data['bukti'] = $this->db->get_where('tbl_bukti_pembayaran', ['kode_order' => $kode_order])->row_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/detail_order', $data);
			$this->load->view('template_admin/footer');

		}

		function ubah_status(){

			$kode_order = $this->input->post('kode_order');

			$data = [
				'status_pembayaran' => 1
			];
			$this->db->where('kode_order', $kode_order);
			$this->db->update('tbl_checkout', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Status pembayaran sudah diupdate", "success" );');
			redirect("admin/detail_order/$kode_order");
		}

		function data_admin(){
			$data['admin'] = $this->db->get('tbl_admin')->result_array();
			$this->load->view('template_admin/header');
			$this->load->View('admin/data_admin', $data);
			$this->load->view('template_admin/footer');

		}

		function tambah_admin(){
			$data = [
				'username' => $this->input->post('username'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
			];

			$this->db->insert('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Admin berhasil ditambah", "success" );');
			redirect('admin/data_admin');
		}

		function hapus_admin(){
			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_admin');
			$this->session->set_flashdata('message', 'swal("Yess!", "Admin berhasil dihapus", "success" );');
			redirect('admin/data_admin');
		}

		function data_seller(){
			$data['seller'] = $this->db->get('tbl_seller')->result_array();
			$data['kab'] = $this->db->get_where('tbl_kabupaten', ['province_id' => 12])->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_seller', $data);
			$this->load->view('template_admin/footer');
		}

		function add_seller(){

			$depo = $this->input->post('deposit');
			if ($depo == '3 JTA') {
				$jml_kg = 300;
			}elseif ($depo == '4 JTA') {
				$jml_kg = 400;
			}elseif ($depo == '5 JTA') {
				$jml_kg = 500;
			}elseif($depo == '6 JTA'){
				$jml_kg == 600;
			}elseif($depo == '7 JTA'){
				$jml_kg = 700;
			}elseif($depo == '8 JTA'){
				$jml_kg = 800;
			}elseif ($depo == '9 JTA') {
				$jml_kg = 900;
			}else{
				$jml_kg = 10000;
			}

			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'kab' => $this->input->post('kab'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'jk' => $this->input->post('jk'),
				'alamat_toko' => $this->input->post('alamat_toko'),
				'nama_toko' => $this->input->post('nama_toko'),
				'no_wa' => $this->input->post('no_wa'),
				'no_ktp' => $this->input->post('no_ktp'),
				'deposit' => $this->input->post('deposit'),
				'jml_kg' => $jml_kg
			];

			$this->db->insert('tbl_seller', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data seller berhasil di tambah", "success");');
			redirect('admin/data_seller');
		}

		function hapus_seller(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_seller');
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil dihapus", "success");');
			redirect('admin/data_seller');
		}

		function act_edit_seller(){

			$id = $this->input->post('id');
			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'kab' => $this->input->post('kab'),
				'kec' => $this->input->post('kec'),
				'kel' => $this->input->post('kel'),
				'jk' => $this->input->post('jk'),
				'alamat_toko' => $this->input->post('alamat_toko'),
				'nama_toko' => $this->input->post('nama_toko'),
				'no_wa' => $this->input->post('no_wa'),
				'no_ktp' => $this->input->post('no_ktp'),
				'deposit' => $this->input->post('deposit')
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_seller', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Data berhasil diedit", "success");');
			redirect('admin/data_seller');

		}
		
		function get_kecseller(){
			$idkec = $this->input->get('id');
			$data['kec'] = $this->db->get_where('tbl_kecamatan', ['regency_id' => $idkec])->result_array();
			$this->load->view('admin/getkec', $data);
		}

		function get_kelseller(){

			$idkel = $this->input->get('id');
			$data['kel'] = $this->db->get_where('tbl_kelurahan', ['district_id' => $idkel])->result_array();
			var_dump($data['kel']);
			$this->load->view('admin/getkel', $data);
		}

		function get_editkecseller(){
			$idkec = $this->input->get('id');
			$data['kec'] = $this->db->get_where('tbl_kecamatan', ['regency_id' => $idkec])->result_array();
			$this->load->view('admin/getkec', $data);
		}

		function get_editkelseller(){

			$idkel = $this->input->get('id');                                                                                                                                                                                          
			$data['kel'] = $this->db->get_where('tbl_kelurahan', ['district_id' => $idkel])->result_array();
			var_dump($data['kel']);
			$this->load->view('admin/getkel', $data);
		}

		function stok_beras($id_seller){

			$data['produk'] = $this->db->get('tbl_produk_stok')->result_array();
			$data['id_seller'] = $id_seller;
			$data['seller'] = $this->db->get_where('tbl_seller', ['id' => $id_seller])->row_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/stok_beras', $data);
			$this->load->view('template_admin/footer');
		}

		function addkeranjang(){

			$id = $this->input->get('id');
			$cekdata = $this->db->get_where('tbl_keranjangadmin', ['id_produk' => $id])->row_array();
			
			if ($cekdata == true) {

				$data = [
					'qty' => $cekdata['qty'] + 1,
					
				];

				$this->db->where('id_produk', $id);
				$this->db->update('tbl_keranjangadmin', $data);	

				$data['list'] = $this->db->get('tbl_keranjangadmin')->result_array();


				$cekdata2 = $this->db->get_where('tbl_keranjangadmin', ['id_produk' => $id])->row_array();
				$dataupdate = [

					'jml_kg' => $cekdata2['qty'] * $cekdata2['kg'],
				];

				$this->db->where('id_produk', $id);
				$this->db->update('tbl_keranjangadmin', $dataupdate);	

				$this->db->select_sum('jml_kg');
				$data['jml'] = $this->db->get('tbl_keranjangadmin')->row_array();



				$this->load->view('admin/listkeranjang', $data);
			}else{
				$produk = $this->db->get_where('tbl_produk_stok', ['id' => $id])->row_array();
				$data = [
					'id_produk' => $this->input->get('id'),
					'id_seller' => $this->input->get('idseller'),
					'qty' => 1,
					'kg' => $produk['berat'],
					'jml_kg' => $produk['berat'] * 1,
				];


				$this->db->insert('tbl_keranjangadmin', $data);
				$data['list'] = $this->db->get('tbl_keranjangadmin')->result_array();

				$this->db->select_sum('jml_kg');
				$data['jml'] = $this->db->get('tbl_keranjangadmin')->row_array();

				$this->load->view('admin/listkeranjang', $data);

			}

		}


		function minkeranjang(){

			$id = $this->input->get('id');

			$cekdata = $this->db->get_where('tbl_keranjangadmin', ['id_produk' => $id])->row_array();
			$data = [
				'qty' => $cekdata['qty'] - 1,

			];

			if($cekdata['qty'] == 1){

				$this->db->where('id_produk', $id);
				$this->db->delete('tbl_keranjangadmin');

				$data['list'] = $this->db->get('tbl_keranjangadmin')->result_array();

				$this->db->select_sum('jml_kg');
				$data['jml'] = $this->db->get('tbl_keranjangadmin')->row_array();
				$this->load->view('admin/listkeranjang', $data);
			}else{

				$this->db->where('id_produk', $id);
				$this->db->update('tbl_keranjangadmin', $data);	

				$data['list'] = $this->db->get('tbl_keranjangadmin')->result_array();



				$cekdata = $this->db->get_where('tbl_keranjangadmin', ['id_produk' => $id])->row_array();
				$update = [

					'jml_kg' =>  $cekdata['jml_kg'] - $cekdata['kg']
				];

				$this->db->where('id_produk', $id);
				$this->db->update('tbl_keranjangadmin', $update);	

				$this->db->select_sum('jml_kg');
				$data['jml'] = $this->db->get('tbl_keranjangadmin')->row_array();
				$this->load->view('admin/listkeranjang', $data);
			}
		}

		function hapus_listkeranjang(){

			$id = $this->input->get('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_keranjangadmin');

			$data['list'] = $this->db->get('tbl_keranjangadmin')->result_array();

			$this->db->select_sum('jml_kg');
			$data['jml'] = $this->db->get('tbl_keranjangadmin')->row_array();
			$this->load->view('admin/listkeranjang', $data);

		}


		function add_stokberasseller(){

			$produk = $this->input->post('produk[]');
			$qty = $this->input->post('qty[]');
			$count = count($produk);   
			$id_seller = $this->input->post('id_seller');                                                     
			$seller = $this->db->get_where('tbl_seller', ['id' => $id_seller])->row_array();
			for ($i=0; $i < $count ; $i++) { 
				
				$data = [
					'id_produk' => $produk[$i],
					'qty' => $qty[$i],
					'id_seller' => $id_seller,
					'kec' => $seller['kec']
				];
				$this->db->insert('tbl_produk_seller', $data);
			}


			$this->db->where('id_seller', $this->input->post("id_seller"));
			$this->db->delete('tbl_keranjangadmin');

			$this->session->set_flashdata('message', 'swal("Yess", "Stok seller berhasil di input", "success");');
			redirect('admin/data_seller');
		}
	}

?>