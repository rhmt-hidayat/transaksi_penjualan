<?php
function does_url_exists($url)
{
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	if ($code == 200) {
		$status = true;
	} else {
		$status = false;
	}
	curl_close($ch);
	return $status;
}


function terbilang($x)
{
	$angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

	if ($x < 12)
		return " " . $angka[$x];
	elseif ($x < 20)
		return terbilang($x - 10) . " belas";
	elseif ($x < 100)
		return terbilang($x / 10) . " puluh" . terbilang($x % 10);
	elseif ($x < 200)
		return "seratus" . terbilang($x - 100);
	elseif ($x < 1000)
		return terbilang($x / 100) . " ratus" . terbilang($x % 100);
	elseif ($x < 2000)
		return "seribu" . terbilang($x - 1000);
	elseif ($x < 1000000)
		return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
	elseif ($x < 1000000000)
		return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
}
function noRekemedisOtomatis()
{
	$ci = get_instance();
	// mencari kode barang dengan nilai paling besar
	$query = "SELECT max(no_rekamedis) as maxKode FROM tbl_pasien";
	$data = $ci->db->query($query)->row_array();
	$kode = $data['maxKode'];
	$noUrut = (int) substr($kode, 0, 6);
	$noUrut++;
	$kodeBaru = sprintf("%06s", $noUrut);
	return $kodeBaru;
}
function generateRandomString($length = 10)
{
	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

function noRegOtomatis()
{
	$ci = get_instance();
	$today = date('Y-m-d');
	// mencari kode barang dengan nilai paling besar
	$query = "SELECT max(no_registrasi) as maxKode FROM tbl_pendaftaran where tanggal_daftar='$today'";
	$data = $ci->db->query($query)->row_array();
	$kode = $data['maxKode'];
	$noUrut = (int) substr($kode, 0, 6);
	$noUrut++;
	$kodeBaru = sprintf("%04s", $noUrut);
	return $kodeBaru;
}

function autocomplate_json($table, $field)
{
	$ci = get_instance();
	$ci->db->like($field, $_GET['term']);
	$ci->db->select($field);
	$collections = $ci->db->get($table)->result();
	foreach ($collections as $collection) {
		$return_arr[] = $collection->$field;
	}
	echo json_encode($return_arr);
}

function Parse_Data($data, $p1, $p2)
{
	$data = " " . $data;
	$hasil = "";
	$awal = strpos($data, $p1);
	if ($awal != "") {
		$akhir = strpos(strstr($data, $p1), $p2);
		if ($akhir != "") {
			$hasil = substr($data, $awal + strlen($p1), $akhir - strlen($p1));
		}
	}
	return $hasil;
}

function Rupiah($nil = 0)
{
	$nil = $nil + 0;
	if (($nil * 100) % 100 == 0) {
		$nil = $nil . ".00";
	} elseif (($nil * 100) % 10 == 0) {
		$nil = $nil . "0";
	}
	$nil = str_replace('.', ',', $nil);
	$str1 = $nil;
	$str2 = "";
	$dot = "";
	$str = strrev($str1);
	$arr = str_split($str, 3);
	$i = 0;
	foreach ($arr as $str) {
		$str2 = $str2 . $dot . $str;
		if (strlen($str) == 3 and $i > 0)
			$dot = '.';
		$i++;
	}
	$rp = strrev($str2);
	if ($rp != "" and $rp > 0) {
		return "Rp. $rp";
	} else {
		return "Rp. 0,00";
	}
}

function Rupiah2($nil = 0)
{
	$nil = $nil + 0;
	if (($nil * 100) % 100 == 0) {
		$nil = $nil . ".00";
	} elseif (($nil * 100) % 10 == 0) {
		$nil = $nil . "0";
	}
	$nil = str_replace('.', ',', $nil);
	$str1 = $nil;
	$str2 = "";
	$dot = "";
	$str = strrev($str1);
	$arr = str_split($str, 3);
	$i = 0;
	foreach ($arr as $str) {
		$str2 = $str2 . $dot . $str;
		if (strlen($str) == 3 and $i > 0)
			$dot = '.';
		$i++;
	}
	$rp = strrev($str2);
	if ($rp != "" and $rp > 0) {
		return "Rp.$rp";
	} else {
		return "-";
	}
}

function Rupiah3($nil = 0)
{
	$nil = $nil + 0;
	if (($nil * 100) % 100 == 0) {
		$nil = $nil . ".00";
	} elseif (($nil * 100) % 10 == 0) {
		$nil = $nil . "0";
	}
	$nil = str_replace('.', ',', $nil);
	$str1 = $nil;
	$str2 = "";
	$dot = "";
	$str = strrev($str1);
	$arr = str_split($str, 3);
	$i = 0;
	foreach ($arr as $str) {
		$str2 = $str2 . $dot . $str;
		if (strlen($str) == 3 and $i > 0)
			$dot = '.';
		$i++;
	}
	$rp = strrev($str2);
	if ($rp != 0) {
		return "$rp";
	} else {
		return "-";
	}
}
function Rupiah_num($nil = 0)
{
	$nil = $nil + 0;
	if (($nil * 100) % 100 == 0) {
		//$nil = $nil . ".00";
		$nil = $nil . ".00";
	} elseif (($nil * 100) % 10 == 0) {
		$nil = $nil . "0";
	}
	$nil = str_replace('.', ',', $nil);

	$str1 = $nil;
	$str2 = "";
	$dot = "";
	$str = strrev($str1);
	$arr = str_split($str, 3);
	$i = 0;
	foreach ($arr as $str) {
		$str2 = $str2 . $dot . $str;
		if (strlen($str) == 3 and $i > 0)
			$dot = '.';
		$i++;
	}
	$rp = strrev($str2);
	if ($rp != 0) {
		$rp = substr_replace($rp, "", -3);
		return "$rp";
	} else {
		return "-";
	}
}

function jecho($a, $b, $str)
{
	if ($a == $b) {
		echo $str;
	}
}

function selected($a, $b, $opt = 0)
{
	if ($a == $b) {
		if ($opt)
			echo "checked='checked'";
		else
			echo "selected='selected'";
	}
}

function rev_tgl($tgl)
{
	$ar = explode('-', $tgl);
	$o = $ar[2] . '-' . $ar[1] . '-' . $ar[0];
	return $o;
}

function penetration($str)
{
	$str = str_replace("'", "-", $str);
	return $str;
}

function penetration1($str)
{
	$str = str_replace("'", " ", $str);
	return $str;
}

function unpenetration($str)
{
	$str = str_replace("-", "'", $str);
	return $str;
}
function spaceunpenetration($str)
{
	$str = str_replace("-", " ", $str);
	return $str;
}

function underscore($str)
{
	$str = str_replace(" ", "_", $str);
	return $str;
}

function ununderscore($str)
{
	$str = str_replace("_", " ", $str);
	return $str;
}

function bulan_($bln)
{
	$nm = '';
	switch ($bln) {
		case '01':
			$nm = 'Januari';
			break;
		case '02':
			$nm = 'Februari';
			break;
		case '03':
			$nm = 'Maret';
			break;
		case '04':
			$nm = 'April';
			break;
		case '05':
			$nm = 'Mei';
			break;
		case '06':
			$nm = 'Juni';
			break;
		case '07':
			$nm = 'Juli';
			break;
		case '08':
			$nm = 'Agustus';
			break;
		case '09':
			$nm = 'September';
			break;
		case '10':
			$nm = 'Oktober';
			break;
		case '11':
			$nm = 'November';
			break;
		case '12':
			$nm = 'Desember';
			break;
		default:
			$nm = '';
			break;
	}
	return $nm;
}

function bulan($bln)
{
	$nm = '';
	switch ($bln) {
		case '1':
			$nm = 'Januari';
			break;
		case '2':
			$nm = 'Februari';
			break;
		case '3':
			$nm = 'Maret';
			break;
		case '4':
			$nm = 'April';
			break;
		case '5':
			$nm = 'Mei';
			break;
		case '6':
			$nm = 'Juni';
			break;
		case '7':
			$nm = 'Juli';
			break;
		case '8':
			$nm = 'Agustus';
			break;
		case '9':
			$nm = 'September';
			break;
		case '10':
			$nm = 'Oktober';
			break;
		case '11':
			$nm = 'November';
			break;
		case '12':
			$nm = 'Desember';
			break;
		default:
			$nm = '';
			break;
	}
	return $nm;
}

function nama_bulan($tgl)
{
	$ar = explode('-', $tgl);

	$nm = '';
	switch ($ar[1]) {
		case '01':
			$nm = 'Januari';
			break;
		case '02':
			$nm = 'Februari';
			break;
		case '03':
			$nm = 'Maret';
			break;
		case '04':
			$nm = 'April';
			break;
		case '05':
			$nm = 'Mei';
			break;
		case '06':
			$nm = 'Juni';
			break;
		case '07':
			$nm = 'Juli';
			break;
		case '08':
			$nm = 'Agustus';
			break;
		case '09':
			$nm = 'September';
			break;
		case '10':
			$nm = 'Oktober';
			break;
		case '11':
			$nm = 'November';
			break;
		case '12':
			$nm = 'Desember';
			break;
	}

	$o = $ar[0] . ' ' . $nm . ' ' . $ar[2];
	return $o;
}

function dua_digit($i)
{
	if ($i < 10)
		$o = '0' . $i;
	else
		$o = $i;
	return $o;
}

function tiga_digit($i)
{
	if ($i < 10)
		$o = '00' . $i;
	else if ($i < 100)
		$o = '0' . $i;
	else
		$o = $i;
	return $o;
}

function to_rupiah($inp = '')
{
	$outp = str_replace('.', '', $inp);
	$outp = str_replace(',', '.', $outp);
	return $outp;
}

function rp($inp = 0)
{
	return number_format($inp, 2, ',', '.');
}
function angka($inp = 0)
{
	return number_format($inp, 0, ',', '.');
}
function pertumbuhan($a = 1, $b = 1, $c = 1, $d = 1)
{
	$x = 0;
	$y = 0;
	$z = 0;
	if ($a > 1)
		$x = (($b - $a) / $a);
	if ($b > 1)
		$y = (($c - $b) / $b);
	if ($c > 1)
		$z = (($d - $c) / $c);
	$outp = (($x + $y + $z) / 3) * 100;
	$outp = round($outp, 2);
	$outp = str_replace('.', ',', $outp) . ' %';
	;
	return $outp;
}
function RemoveSpecialChars($str)
{

	// Using preg_replace() function
	// to replace the word
	$res = preg_replace('/[^a-zA-Z0-9_ -]/s', ' ', $str);

	// Returning the result
	return $res;
}
function koma($a = 1)
{
	if (substr_count($a, '.'))

		$a = str_replace(".", ",", $a);
	else
		$a = number_format($a, 0, ',', '.');
	return $a;
}


function tgl_indo_dari_str($tgl_str)
{
	$tanggal = tgl_indo(date('Y m d', strtotime($tgl_str)));
	return $tanggal;
}

function tgl_indo($tgl)
{
	$tanggal = substr($tgl, 8, 2);
	$bulan = getBulan(substr($tgl, 5, 2));
	$tahun = substr($tgl, 0, 4);
	return $tanggal . ' ' . $bulan . ' ' . $tahun;
}

function tgl_indo_out($tgl)
{
	if ($tgl) {
		$tanggal = substr($tgl, 8, 2);
		$bulan = substr($tgl, 5, 2);
		$tahun = substr($tgl, 0, 4);
		return $tanggal . '-' . $bulan . '-' . $tahun;
	}
}
function tgl_indo_out2($tgl)
{
	if ($tgl) {
		$tanggal = substr($tgl, 8, 2);
		$bulan = substr($tgl, 5, 2);
		$tahun = substr($tgl, 0, 4);
		return $tanggal . '/' . $bulan . '/' . $tahun;
	}
}
function tgl_indo_in($tgl)
{
	$tanggal = substr($tgl, 0, 2);
	$bulan = substr($tgl, 3, 2);
	$tahun = substr($tgl, 6, 4);
	return $tahun . '-' . $bulan . '-' . $tanggal;
}
function tgl_indo2($tgl)
{
	$tanggal = substr($tgl, 8, 2);
	$jam = substr($tgl, 11, 8);
	$bulan = getBulan(substr($tgl, 5, 2));
	$tahun = substr($tgl, 0, 4);
	//return $tanggal.' '.$bulan.' '.$tahun.' '.$jam.' WIB';
	return $tanggal . ' ' . $bulan . ' ' . $tahun . ' ' . $jam . '';
}
function tgl_indo_out_jam($tgl)
{
	//2023-06-13 11:35:00
	$tanggal = substr($tgl, 8, 2);
	$bulan = substr($tgl, 5, 2);
	$tahun = substr($tgl, 0, 4);
	$jam = substr($tgl, 11, 5);
	//return $tanggal.' '.$bulan.' '.$tahun.' '.$jam.' WIB';
	return $tanggal . '-' . $bulan . '-' . $tahun . ' ' . $jam . '';
}
function tgl_indo_in_jam($tgl)
{
	//13-06-2023 09:52
	$tanggal = substr($tgl, 0, 2);
	$bulan = substr($tgl, 3, 2);
	$tahun = substr($tgl, 6, 4);
	$jam = substr($tgl, 11, 5);
	//return $tanggal.' '.$bulan.' '.$tahun.' '.$jam.' WIB';
	return $tahun . '-' . $bulan . '-' . $tanggal . ' ' . $jam . '';
}
function waktu_ind($time)
{
	$str = "";
	if (($time / 360) > 1) {
		$jam = ($time / 360);
		$jam = explode('.', $jam);
		$str .= $jam . " Jam ";
	}
	if (($time / 60) > 1) {
		$menit = ($time / 60);
		$menit = explode('.', $menit);
		$str .= $menit[0] . " Menit ";
	}
	$detik = $time % 60;
	$str .= $detik;

	return $str . ' Detik';
}

function generate_string($input, $strength = 16)
{
	$input_length = strlen($input);
	$random_string = '';
	for ($i = 0; $i < $strength; $i++) {
		$random_character = $input[mt_rand(0, $input_length - 1)];
		$random_string .= $random_character;
	}

	return $random_string;
}
function run_key()
{

	$chars = array(
		'a',
		'b',
		'c',
		'd',
		'e',
		'f',
		'g',
		'h',
		'i',
		'j',
		'k',
		'l',
		'm',
		'n',
		'o',
		'p',
		'q',
		'r',
		's',
		't',
		'u',
		'v',
		'w',
		'x',
		'y',
		'z',
		'A',
		'B',
		'C',
		'D',
		'E',
		'F',
		'G',
		'H',
		'I',
		'J',
		'K',
		'L',
		'M',
		'N',
		'O',
		'P',
		'Q',
		'R',
		'S',
		'T',
		'U',
		'V',
		'W',
		'X',
		'Y',
		'Z',
		'0',
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'7',
		'8',
		'9',
		'?',
		'!',
		'@',
		'#',
		'$',
		'%',
		'^',
		'&',
		'*',
		'(',
		')',
		'[',
		']',
		'{',
		'}',
		'|',
		';',
		'/',
		'=',
		'+'
	);

	shuffle($chars);

	$num_chars = count($chars) - 1;
	$token = '';

	for ($i = 0; $i < $num_chars; $i++) { // <-- $num_chars instead of $len
		$token .= $chars[mt_rand(0, $num_chars)];
	}

	return $token;
}

function getBulan($bln)
{
	switch ($bln) {
		case 1:
			return "Januari";
			break;
		case 2:
			return "Februari";
			break;
		case 3:
			return "Maret";
			break;
		case 4:
			return "April";
			break;
		case 5:
			return "Mei";
			break;
		case 6:
			return "Juni";
			break;
		case 7:
			return "Juli";
			break;
		case 8:
			return "Agustus";
			break;
		case 9:
			return "September";
			break;
		case 10:
			return "Oktober";
			break;
		case 11:
			return "November";
			break;
		case 12:
			return "Desember";
			break;
	}

}




//time out
function timer()
{
	$time = 2000;
	$_SESSION['timeout'] = time() + $time;
}

function generator($length = 7)
{
	return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

function cek_login()
{
	$timeout = $_SESSION['timeout'];
	if (time() < $timeout) {
		timer();
		return true;
	} else {
		unset($_SESSION['timeout']);
		return false;
	}
}

//time out Mandiri set 3 login per 5 menit
function mandiri_timer()
{
	$time = 90; //300 detik
	$_SESSION['mandiri_try'] = 4;
	$_SESSION['mandiri_wait'] = 0;
	$_SESSION['mandiri_timeout'] = time() + $time;
}

function mandiri_timeout()
{
	(isset($_SESSION['mandiri_timeout'])) ? $timeout = $_SESSION['mandiri_timeout'] : $timeout = null;
	if (time() > $timeout) {
		mandiri_timer();
	}
}

function get_identitas()
{
	$ci =& get_instance();
	$sql = "SELECT * FROM config";
	$a = $ci->db->query($sql);
	$hsl = $a->row_array();
	//print_r($hsl);
	$string = ucwords(config_item('sebutan_desa')) . " : " . $hsl['nama_desa'] . " Kec : " . $hsl['nama_kecamatan'] . " Kab : " . $hsl['nama_kabupaten'];
	return $string;
}

// fix str aneh utk masuk ke db
// TODO: Jangan pernah gunakan saya lagi bro,,,,,, :p
function fixSQL($str, $encode_ent = false)
{
	$str = @trim($str);
	if ($encode_ent) {
		$str = htmlentities($str);
	}

	if (version_compare(phpversion(), '4.3.0') >= 0) {
		if (get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		// FIXME
		if (function_exists('mysql_ping') && @mysql_ping()) {
			$str = mysql_real_escape_string($str);
		} else {
			$str = addslashes($str);
		}

	} else if (!get_magic_quotes_gpc()) {
		$str = addslashes($str);
	}

	return $str;
}

//baca data tanpa HTML Tags
function fixTag($varString)
{
	$isIn = true;
	$strD = "";
	for ($i = 0; $i <= strlen($varString); $i++) {
		$mch = substr($varString, $i, 1);
		if ((ord($mch) == 9) || (ord($mch) == 10) || (ord($mch) == 13)) {
			$mch = " ";
		}
		if ($mch == "<") {
			$isIn = true;
		}
		if ($mch == ">") {
			$isIn = false;
		} else {
			if ($isIn == false) {
				$strD .= $mch;
			}
		}
	}
	return trim($strD);
}

/*
 * Format tampilan tanggal rentang
 * */

function fTampilTgl($sdate, $edate)
{
	if ($sdate == $edate) {
		$tgl = date("j M Y", strtotime($sdate));
	} elseif ($edate > $sdate) {
		if (date("Y", strtotime($sdate)) == date("Y", strtotime($edate))) {
			if (date("M Y", strtotime($sdate)) == date("M Y", strtotime($edate))) {
				if (date("j M Y", strtotime($sdate)) == date("j M Y", strtotime($edate))) {
					if (date("j M Y H", strtotime($sdate)) == date("j M Y H", strtotime($edate))) {
						$tgl = date("j M Y H:i", strtotime($sdate));
					} else {
						$tgl = date("j M Y H:i", strtotime($sdate)) . " - " . date("H:i", strtotime($edate));
					}
				} else {
					$tgl = date("j", strtotime($sdate)) . " - " . date("j M Y", strtotime($edate));
				}
			} else {
				$tgl = date("j M", strtotime($sdate)) . " - " . date("j M Y", strtotime($edate));
			}
		} else {
			$tgl = date("j M Y", strtotime($sdate)) . " - " . date("j M Y", strtotime($edate));
		}
	}
	return $tgl;
}


function hash_pin($pin = "")
{
	$pin = strrev($pin);
	$pin = $pin * 77;
	$pin .= "!#@$#%";
	$pin = md5($pin);
	return $pin;
}

function getInfoRS($field)
{
	$ci = get_instance();
	$ci->db->where('id', 1);
	$rs = $ci->db->get('tbl_profil_app')->row_array();
	return $rs[$field];
}



/* fungsi untuk mendapatkan value dari sebuah tabel
 * $table nama tabel yang digunakan
 * $field nama field yang ingin ditampilkan
 * $key ingin ditampilkan berdasarkan field yang mana
 * $value = berdasrkan apa
 */
function getFieldValue($table, $field, $key, $value)
{
	$ci = get_instance();
	$ci->db->where($key, $value);
	$data = $ci->db->get($table)->row_array();
	return $data[$field];
}

// untuk chek akses level pada modul peberian akses
function checked_akses($id_user_level, $id_menu)
{
	// $db_name = $_SESSION['db_session'];
	$db_name = 'db_estp';
	$ci = get_instance();
	$ci->db->where('id_user_level', $id_user_level);
	$ci->db->where('id_menu', $id_menu);
	$data = $ci->db->get($db_name . '.tbl_hak_akses');
	if ($data->num_rows() > 0) {
		//return "checked='checked'";
		return "checked";
	}
}

// untuk chek akses level pada modul peberian akses
function checked_approved($id)
{
	$ci = get_instance();
	$ci->db->where('approved', 0);
	$ci->db->where('id', $id);
	$data = $ci->db->get('tbl_chat_contact');
	if ($data->num_rows() > 1) {
		return "checked='checked'";
	}
}

// untuk chek ke table penilaian detail jika ada
function checked_nilai($id_pegawai, $semester, $kompetensi_id)
{
	$ci = get_instance();
	$ci->db->where('id_pegawai', $id_pegawai);
	$ci->db->where('semester', $semester);
	$ci->db->where('kompetensi_id', $kompetensi_id);
	$data = $ci->db->get('tbl_pegawai_penilaian');
	if ($data->num_rows() > 0) {
		return "checked='checked'";
	}
}

?>
