<?php 
 
// Connection
$conna = mysqli_connect( "localhost", "root", "", "sma_pamotan" ) or die ( "Error !".mysqli_error( $conna ) );

 
// Membuat fungsi acak huruf
function random_chara( $panjanga ) { 
  $karaktera = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
  $stringa = ''; 
  for ( $ia = 0; $ia < $panjanga; $ia++ ) { 
    $posa = rand( 0, strlen( $karaktera ) - 1 ); 
    $stringa .= $karaktera{$posa}; 
  } 
//return $stringa;
  return "NTS";
}


$yearsa = date( 'Y' ); // tahun
$get_3_number_of_yeara = substr( $yearsa,-3 ); // mengambil 3 angka dari sebelah kanan pada tahun sekarang


/**
*
* Query untuk mengambil 1 baris data berdasarkan id / kode yg terakhir
* RIGHT(kd_barang,3) maksudnya mengambil 3 angka dari sebelah kanan diurutkan berdasarkan kode tsb secara Descending
*/
$get_dataa = mysqli_query( $conna, "SELECT RIGHT(id_nilai_tugas,3) FROM nilai_tugas ORDER BY RIGHT(id_nilai_tugas,3) DESC" );

$check_dataa = mysqli_num_rows( $get_dataa );
$fetch_dataa = mysqli_fetch_array( $get_dataa );
$maxida = $fetch_dataa[0];

// MEMBUAT CUSTOM KODE BAGIAN DEPAN
$custom_codea = random_chara(3) . $get_3_number_of_yeara . '-'; // 7 karakter custom code dari sebelah kiri


if ( empty( $check_dataa ) ) { // Mengecek apakah di dlm database tidak ada data maka
  $new_codea = 1; // kode dimulai dr 1
} else { // jika ada data dlm db maka
  $the_codea = substr( $maxida, -3 ); // kode yg ada pd db di pecah dan hannya 3 angka dibagian blkng yg diambil
  $new_codea = $the_codea + 1; // 3 angka tsb setelah dipecah akan ditambahkan 1 secara berurutan berdasarkan data yg terakhir
}

/**
*
* Dibawah ini merupakan custom code bagian belakan
* Saya membuat code bagian belakang hanya untuk menampung ribuan data (3 angka)
*/
$kda = ''; // Mendifinisikan nilai variable.
if ( $new_codea >= 1 && $new_codea < 10 ) :
  $kda .= $custom_codea."00".$new_codea;
elseif ( $new_codea >= 10 && $new_codea < 100 ) :
  $kda .= $custom_codea."0".$new_codea;
else :
  $kda .= $custom_codea.$new_codea; // batas data di db hannya sampai 999 data
endif;
 
?>