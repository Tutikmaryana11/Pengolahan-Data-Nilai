
<?php

defined ('pamotan') or die ();

$view = isset ($_GET['view']) ? $_GET['view']:null;
switch ($view) {
//belajar guru delete
	case 'belajar_guru_delete':
		# code...
	include_once 'view/belajar_guru_delete.php';
		break;
	case 'simpan_naik_kelas':
		# code...
	include_once 'view/simpan_naik_kelas.php';
		break;
		case 'naik_kelas':
		# code...
	include_once 'view/naik_kelas.php';
		break;

		case 'siswa_naik':
		# code...
	include_once 'view/siswa_naik.php';
		break;
		case 'insert_naik_kelas':
		include_once "lib/operation/naik_kelas/add.php";
			break;


//belajar guru insert
	case 'belajar_guru_insert':
		# code...
	include_once 'view/belajar_guru_insert.php';
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

//belajarguru
	case 'belajar_guru':
		# code...
	include_once 'view/belajar_guru.php';
		break;
	//BELAJAR
	case 'belajar':
		include_once 'view/belajar.php';
		break;
		//BELAJAR
	case 'edit_belajar':
		include_once 'view/edit_belajar.php';
		break;
		case 'edit_belajar_p':
		include_once 'view/edit_belajar_p.php';
		break;

case 'tahunkelas':
	include_once "view/tahunkelas.php";
		break;

		//anak materi
		case 'insert_materi':
		include_once "lib/operation/tahunkelas/additem.php";
			break;


		
	
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

	//ayah
	case 'ayah':
	include_once "view/ayah.php";
		break;

		//anak ayah
		case 'insert_ayah':
		include_once "lib/operation/ayah/additem.php";
			break;

		case 'edit_ayah':
		include_once "lib/operation/ayah/edititem.php";
			break;

		case 'edit_ayah_p':
		include_once "lib/operation/ayah/edititem_process.php";
			break;

		case 'delete_ayah':
		include_once "lib/operation/ayah/delitem.php";
			break;

		//ibu
	case 'ibu':
	include_once "view/ibu.php";
		break;

		//anak ibu
		case 'insert_ibu':
		include_once "lib/operation/ibu/additem.php";
			break;

		case 'edit_ibu':
		include_once "lib/operation/ibu/edititem.php";
			break;

		case 'edit_ibu_p':
		include_once "lib/operation/ibu/edititem_process.php";
			break;

		case 'delete_ibu':
		include_once "lib/operation/ibu/delitem.php";
			break;
		


	//wali
	case 'wali':
	include_once "view/wali.php";
		break;

		//anak wali
		case 'insert_wali':
		include_once "lib/operation/wali/additem.php";
			break;

		case 'edit_wali':
		include_once "lib/operation/wali/edititem.php";
			break;

		case 'edit_wali_p':
		include_once "lib/operation/wali/edititem_process.php";
			break;

		case 'delete_wali':
		include_once "lib/operation/wali/delitem.php";
			break;

	//mata pelajaran
	case 'mata_pelajaran':
	include_once "view/mata_pelajaran.php";
		break;

		//anak materi
		case 'insert_mapel':
		include_once "lib/operation/mapel/additem.php";
			break;

		case 'edit_mapel':
		include_once "lib/operation/mapel/edititem.php";
			break;

		case 'edit_mapel_p':
		include_once "lib/operation/mapel/edititem_process.php";
			break;

		case 'delete_mapel':
		include_once "lib/operation/mapel/delitem.php";
			break;

	//jurusan
	case 'rombel':
	include_once "view/rombel.php";
		break;

		//anak materi
		case 'insert_rombel':
		include_once "lib/operation/rombel/additem.php";
			break;

		case 'edit_rombel':
		include_once "lib/operation/rombel/edititem.php";
			break;

		case 'edit_rombel_p':
		include_once "lib/operation/rombel/edititem_process.php";
			break;

		case 'delete_rombel':
		include_once "lib/operation/rombel/delitem.php";
			break;

	//kelas
	case 'kelas':
	include_once "view/kelas.php";
		break;

		//anak materi
		case 'insert_kelas':
		include_once "lib/operation/kelas/additem.php";
			break;

		case 'edit_kelas':
		include_once "lib/operation/kelas/edititem.php";
			break;

		case 'edit_kelas_p':
		include_once "lib/operation/kelas/edititem_process.php";
			break;

		case 'delete_kelas':
		include_once "lib/operation/kelas/delitem.php";
			break;

	//admin
	case 'admin':
	include_once "view/admin.php";
		break;

		//anak admin
		case 'insert_admin':
		include_once "lib/operation/admin/additem.php";
			break;

		case 'edit_admin':
		include_once "lib/operation/admin/edititem.php";
			break;

		case 'edit_admin_p':
		include_once "lib/operation/admin/edititem_process.php";
			break;

		case 'delete_admin':
		include_once "lib/operation/admin/delitem.php";
			break;


	//guru
	case 'guru':
	include_once "view/guru.php";
		break;

		//anak guru
		case 'insert_guru':
		include_once "lib/operation/guru/additem.php";
			break;

		case 'edit_guru':
		include_once "lib/operation/guru/edititem.php";
			break;

		case 'edit_guru_p':
		include_once "lib/operation/guru/edititem_process.php";
			break;

		case 'delete_guru':
		include_once "lib/operation/guru/delitem.php";
			break;

	//siswa
	case 'siswa':
	include_once "view/siswa.php";
		break;

		//anak siswa
		case 'insert_siswa':
		include_once "lib/operation/siswa/additem.php";
			break;

		case 'tambah_siswa':
		include_once "lib/operation/siswa/siswa_tambah_view.php";
			break;

		case 'cari_siswa':
		include_once "lib/operation/siswa/siswa_search.php";
			break;

		case 'detail_siswa':
		include_once "lib/operation/siswa/detail_siswa.php";
			break;

		case 'result_siswa':
		include_once "lib/operation/siswa/result_siswa.php";
			break;

		case 'edit_siswa':
		include_once "lib/operation/siswa/edititem.php";
			break;

		case 'edit_siswa_p':
		include_once "lib/operation/siswa/edititem_process.php";
			break;

		case 'delete_siswa':
		include_once "lib/operation/siswa/delitem.php";
			break;

	//siswa
	case 'statistik':
	include_once "view/statistik.php";
		break;

		//anak statistik
		case 'insert_statistik':
		include_once "lib/operation/statistik/additem.php";
			break;

		case 'tambah_statistik':
		include_once "lib/operation/statistik/statistik_tambah_view.php";
			break;

		case 'cari_statistik':
		include_once "lib/operation/statistik/statistik_search.php";
			break;

		case 'detail_statistik':
		include_once "lib/operation/statistik/detail_statistik.php";
			break;

		case 'result_statistik':
		include_once "lib/operation/statistik/result_statistik.php";
			break;

		case 'edit_statistik':
		include_once "lib/operation/statistik/edititem.php";
			break;

		case 'edit_statistik_p':
		include_once "lib/operation/statistik/edititem_process.php";
			break;

		case 'delete_statistik':
		include_once "lib/operation/statistik/delitem.php";
			break;



	//laporan nilai
	case 'penghargaan':
	include_once "view/penghargaan.php";
		break;


		//anak siswa
		case 'insert_penghargaan':
		include_once "lib/operation/penghargaan/additem.php";
			break;

		case 'tambah_penghargaan':
		include_once "lib/operation/penghargaan/penghargaan_tambah_view.php";
			break;

		case 'cari_penghargaan':
		include_once "lib/operation/penghargaan/penghargaan_search.php";
			break;

		case 'cari_statistik_penghargaan':
		include_once "lib/operation/penghargaan/penghargaan_statistik.php";
			break;

		case 'detail_penghargaan':
		include_once "lib/operation/penghargaan/detail_penghargaan.php";
			break;

		case 'result_penghargaan':
		include_once "lib/operation/penghargaan/result_penghargaan.php";
			break;

		case 'result_penghargaan_statistik':
		include_once "lib/operation/penghargaan/result_penghargaan_statistik.php";
			break;

		case 'edit_penghargaan':
		include_once "lib/operation/penghargaan/edititem.php";
			break;

		case 'edit_penghargaan_p':
		include_once "lib/operation/penghargaan/edititem_process.php";
			break;

		case 'delete_penghargaan':
		include_once "lib/operation/penghargaan/delitem.php";
			break;

	//laporan nilai
	case 'pembinaan':
	include_once "view/pembinaan.php";
		break;


		//anak siswa
		case 'insert_pembinaan':
		include_once "lib/operation/pembinaan/additem.php";
			break;

		case 'tambah_pembinaan':
		include_once "lib/operation/pembinaan/pembinaan_tambah_view.php";
			break;

		case 'cari_pembinaan':
		include_once "lib/operation/pembinaan/pembinaan_search.php";
			break;

		case 'cari_statistik_pembinaan':
		include_once "lib/operation/pembinaan/pembinaan_statistik.php";
			break;

		case 'detail_pembinaan':
		include_once "lib/operation/pembinaan/detail_pembinaan.php";
			break;

		case 'result_pembinaan':
		include_once "lib/operation/pembinaan/result_pembinaan.php";
			break;

		case 'result_pembinaan_statistik':
		include_once "lib/operation/pembinaan/result_pembinaan_statistik.php";
			break;

		case 'edit_pembinaan':
		include_once "lib/operation/pembinaan/edititem.php";
			break;

		case 'edit_pembinaan_p':
		include_once "lib/operation/pembinaan/edititem_process.php";
			break;

		case 'delete_pembinaan':
		include_once "lib/operation/pembinaan/delitem.php";
			break;

	//laporan nilai
	case 'seleksi':
	include_once "view/seleksi.php";
		break;


		//anak siswa
		case 'insert_seleksi':
		include_once "lib/operation/seleksi/additem.php";
			break;

		case 'tambah_seleksi':
		include_once "lib/operation/seleksi/seleksi_tambah_view.php";
			break;

		case 'cari_seleksi':
		include_once "lib/operation/seleksi/seleksi_search.php";
			break;

		case 'cari_statistik_seleksi':
		include_once "lib/operation/seleksi/seleksi_statistik.php";
			break;

		case 'detail_seleksi':
		include_once "lib/operation/seleksi/detail_seleksi.php";
			break;

		case 'result_seleksi':
		include_once "lib/operation/seleksi/result_seleksi.php";
			break;

		case 'result_seleksi_statistik':
		include_once "lib/operation/seleksi/result_seleksi_statistik.php";
			break;

		case 'edit_seleksi':
		include_once "lib/operation/seleksi/edititem.php";
			break;

		case 'edit_seleksi_p':
		include_once "lib/operation/seleksi/edititem_process.php";
			break;

		case 'delete_seleksi':
		include_once "lib/operation/seleksi/delitem.php";
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

			case 'laporan_siswa':
		include_once "view/laporan_siswa.php";
			break;

				case 'view_laporan_siswa':
		include_once "view/view_laporan_siswa.php";
			break;
			case 'view_laporan_mapel':
		include_once "view/view_laporan_mapel.php";
			break;
			case 'view_laporan_guru':
		include_once "view/view_laporan_guru.php";
			break;

			case 'export_nilai':
		include_once "view/export_nilai.php";
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