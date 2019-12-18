<?php
//set variable post dari Ajax
$username = $_POST['username'];
$password = $_POST['password'];

//set variable awal, fungsinya jika tidak ada proses yang berjalan maka return adalah kosong
$data['alert'] = "Gagal !";
$data['isi_alert'] = "Tidak ada proses berjalan.";

//cek inputan kosong atau tidak, jika kosong maka return error
if ($username == '' && $password == ''){
	$data['alert'] = "Gagal !";
	$data['isi_alert'] = "Username dan Password tidak boleh kosong.";
} else {
	//cek inputan sudah sesuai apa belum, username=admin & password=admin
	if ($username == "admin"){
		//cek inputan password
		if ($password == "admin"){
			$data['alert'] = "Sukses !";
			$data['isi_alert'] = "Berhasil Login.";
		} else {
			//kondisi jika password tidak sesuai
			$data['alert'] = "Gagal !";
			$data['isi_alert'] = "Password Salah. Silahkan masukkan Password dengan benar.";
		}
	} else {
		//kondisi jika username tidak sesuai
		$data['alert'] = "Gagal !";
		$data['isi_alert'] = "Username Salah. Silahkan masukkan Username dengan benar.";
	}
}

echo json_encode($data);