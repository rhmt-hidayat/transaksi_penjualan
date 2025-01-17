<?php

function is_login()
{
	//$db_name = $_SESSION['db_session'];	
	$ci = get_instance();
	if (!$ci->session->userdata('id_users')) {
		redirect(base_url());
	} else {
		$modul = $ci->uri->segment(1);
		$modul2 = $ci->uri->segment(2);
		//var_dump($modul . "|" . $modul2);

		$id_user_level = $ci->session->userdata('id_user_level');

		if ($modul2 == '') {
			// dapatkan id menu berdasarkan nama controller
			//$menu = $ci->db->get_where($db_name . '.tbl_menu', array('url' => $modul))->row_array();
			$menu = $ci->db->get_where('tbl_menu', array('url' => $modul))->row_array();
			// $sql = $ci->db->last_query();
			// var_dump($sql);
			// exit;
		} else {
			// dapatkan id menu berdasarkan nama controller
			//$menu = $ci->db->get_where($db_name . '.tbl_menu', array('controllers_name' => $modul))->row_array();	
			$menu = $ci->db->get_where('tbl_menu', array('controllers_name' => $modul))->row_array();
			// $sql = $ci->db->last_query();
			// var_dump($sql);
			// exit;
		}

		$id_menu = $menu['id_menu'];
		// chek apakah user ini boleh mengakses modul ini
		//$hak_akses = $ci->db->get_where($db_name . '.tbl_hak_akses', array('id_menu' => $id_menu, 'id_user_level' => $id_user_level));
		$hak_akses = $ci->db->get_where('tbl_hak_akses', array('id_menu' => $id_menu, 'id_user_level' => $id_user_level));
		// $sql = $ci->db->last_query();
		// var_dump($sql);
		// exit;

		if ($hak_akses->num_rows() < 1) {
			redirect(base_url('404'));
		}
	}
}
function is_module_akses()
{
	//$db_name = $_SESSION['db_session'];	
	$ci = get_instance();
	if (!$ci->session->userdata('id_users')) {
		redirect(base_url());
	} else {
		if (!$ci->session->userdata('app_name')) {
			redirect(base_url());
		} else {
			$username = $ci->session->userdata('username');
			$id_user_level = $ci->session->userdata('id_user_level');
			$app_name = $ci->session->userdata('app_name');

			if ($app_name == 'CRM') {
				$ci->db->where('nama_module', $app_name);
				$ci->db->where('email', $username);
				$ci->db->limit(1);
				$users = $ci->db->get('sales');
				if (intval($users->num_rows()) == 0) {
					redirect(base_url('404'));
				}
			}
		}
	}
}
?>