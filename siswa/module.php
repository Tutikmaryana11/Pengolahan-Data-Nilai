<?php

defined ('pamotan') or die ();

$view = isset ($_GET['view']) ? $_GET['view']:null;
switch ($view) {
	
	//materi
	case 'materi':
	include_once "view/materi.php";
		break;

		//anak materi
		case 'insert_materi':
		include_once "lib/operation/materi/additem.php";
			break;

		case 'edit_materi':
		include_once "lib/operation/materi/edititem.php";
			break;

		case 'edit_materi_p':
		include_once "lib/operation/materi/edititem_process.php";
			break;

		case 'delete_materi':
		include_once "lib/operation/materi/delitem.php";
			break;

		case 'download':
		include_once "lib/operation/materi/download.php";
			break;
//materi
	case 'nilai':
	include_once "view/nilai.php";
		break;

		//anak nilai
		case 'insert_nilai':
		include_once "lib/operation/nilai/additem.php";
			break;

		case 'edit_nilai':
		include_once "lib/operation/nilai/edititem.php";
			break;

		case 'edit_nilai_p':
		include_once "lib/operation/nilai/edititem_process.php";
			break;

		case 'delete_nilai':
		include_once "lib/operation/nilai/delitem.php";
			break;

		case 'download':
		include_once "lib/operation/nilai/download.php";
			break;


	//berita
	case 'berita':
	include_once "view/berita.php";
		break;

		//anak materi
		case 'insert_berita':
		include_once "lib/operation/berita/additem.php";
			break;

		case 'edit_berita':
		include_once "lib/operation/berita/edititem.php";
			break;

		case 'edit_berita_p':
		include_once "lib/operation/berita/edititem_process.php";
			break;

		case 'delete_berita':
		include_once "lib/operation/berita/delitem.php";
			break;
	


	//siswa
	case 'tugas':
	include_once "view/tugas.php";
		break;

		//anak siswa
		case 'insert_tugas':
		include_once "lib/operation/tugas/additem.php";
			break;

		case 'edit_nilai_tugas':
		include_once "lib/operation/tugas/edititem.php";
			break;

		case 'edit_nilai_tugas_p':
		include_once "lib/operation/tugas/edititem_process.php";
			break;

		case 'delete_tugas':
		include_once "lib/operation/tugas/delitem.php";
			break;

		case 'delete_nilai_tugas':
		include_once "lib/operation/tugas/delitem_tugas.php";
			break;

		case 'lihat_tugas_siswa':
		include_once "view/lihat_tugas_siswa.php";
			break;

		case 'detail_tugas_siswa':
		include_once "view/detail_tugas_siswa.php";
			break;

		case 'nilai_tugas_siswa':
		include_once "view/nilai_tugas_siswa.php";
			break;

		case 'add_nilai_tugas_s':
		include_once "lib/operation/tugas/add_nilai_tugas_siswa.php";
			break;

	//jurusan
	case 'soal_kuis':
	include_once "view/kuis.php";
		break;

		//anak materi
		case 'insert_kuis':
		include_once "config/connect.php";
		include_once "lib/operation/kuis/additem_proc.php";
			break;

		case 'edit_kuis':
		include_once "lib/operation/kuis/edititem.php";
			break;

		case 'edit_kuis_p':
		include_once "lib/operation/kuis/edititem_process.php";
			break;

		case 'delete_kuis':
		include_once "lib/operation/kuis/delitem.php";
			break;

		case 'view_soal_kuis':
		include_once "view/view_soal_kuis.php";
			break;

		case 'view_kuis':
		include_once "view/view_kuis.php";
			break;

		case 'detail_kuis':
		include_once "view/detail_kuis.php";
			break;

		case 'delete_kuis_u':
		include_once "lib/operation/kuis/delitem_p.php";
			break;


	//laporan nilai
	case 'laporan_nilai':
	include_once "view/laporan_nilai.php";
		break;

		//laporan nilai
		case 'view_nilai_tugas':
		include_once "view/view_nilai_tugas.php";
			break;

		case 'view_nilai_kuis':
		include_once "view/view_nilai_kuis.php";
			break;

		case 'laporan_nilai_tugas':
		include_once "view/laporan_nilai_tugas.php";
			break;

		case 'laporan_nilai_kuis':
		include_once "view/laporan_nilai_kuis.php";
			break;

	case 'signout':
	include_once "lib/signout.php";
		break;	
		
	default:
	include_once "view/home.php";
		break;

}