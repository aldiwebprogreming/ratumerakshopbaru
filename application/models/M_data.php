<?php 

		/**
		 * 
		 */
		class M_data extends CI_Model
		{

			function kab(){

				return $this->db->get_where('tbl_kabupaten', ['province_id' => 12])->result_array();
			}
			
			function getkab($id){

				$query = $this->db->get_where('tbl_kabupaten', ['id' => $id]);
				return $query->row_array();

			}

			function getkec ($id){

				$query = $this->db->get_where('tbl_kecamatan', ['id' => $id]);
				return $query->row_array();

			}

			function getkel ($id){

				$query = $this->db->get_where('tbl_kelurahan', ['id' => $id]);
				return $query->row_array();

			}

			function alamat_pengantaran($kode_user){

				$query = $this->db->get_where('tbl_alamat_pengantaran_user', ['kode_user' => $kode_user]);
				return $query->row_array();
			}
		}
	?>