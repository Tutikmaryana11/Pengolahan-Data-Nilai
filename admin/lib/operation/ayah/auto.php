<?php 
 
// Connection
include_once 'lib/operation/koneksi.php';

 
// Membuat fungsi acak huruf
function random_char( $panjang ) { 
  $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
  $string = ''; 
  for ( $i = 0; $i < $panjang; $i++ ) { 
    $pos = rand( 0, strlen( $karakter ) - 1 ); 
    $string .= $karakter{$pos}; 
  } 
return "AYAHK";
}


$years = date( 'Y' ); // tahun
$get_3_number_of_year = substr( $years,-3 ); // mengambil 3 angka dari sebelah kanan pada tahun sekarang


/**
*
* Query untuk mengambil 1 baris data berdasarkan id / kode yg terakhir
* RIGHT(kd_barang,3) maksudnya mengambil 3 angka dari sebelah kanan diurutkan berdasarkan kode tsb secara Descending
*/
$get_data = mysqli_query( $conn, "SELECT RIGHT(ayah_id,3) FROM ayah_kandung ORDER BY RIGHT(ayah_id,3) DESC" );

$check_data = mysqli_num_rows( $get_data );
$fetch_data = mysqli_fetch_array( $get_data );
$maxid = $fetch_data[0];

// MEMBUAT CUSTOM KODE BAGIAN DEPAN
$custom_code = random_char(3) . $get_3_number_of_year . '-'; // 7 karakter custom code dari sebelah kiri


if ( empty( $check_data ) ) { // Mengecek apakah di dlm database tidak ada data maka
  $new_code = 1; // kode dimulai dr 1
} else { // jika ada data dlm db maka
  $the_code = substr( $maxid, -3 ); // kode yg ada pd db di pecah dan hannya 3 angka dibagian blkng yg diambil
  $new_code = $the_code + 1; // 3 angka tsb setelah dipecah akan ditambahkan 1 secara berurutan berdasarkan data yg terakhir
}

/**
*
* Dibawah ini merupakan custom code bagian belakan
* Saya membuat code bagian belakang hanya untuk menampung ribuan data (3 angka)
*/
$kd = ''; // Mendifinisikan nilai variable.
if ( $new_code >= 1 && $new_code < 10 ) :
  $kd .= $custom_code."00".$new_code;
elseif ( $new_code >= 10 && $new_code < 100 ) :
  $kd .= $custom_code."0".$new_code;
else :
  $kd .= $custom_code.$new_code; // batas data di db hannya sampai 999 data
endif;
 
?>