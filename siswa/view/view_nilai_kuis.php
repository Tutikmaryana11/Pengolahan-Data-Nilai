 <div class="container">
 	<div class="section">

 		<!--   Icon Section   -->
 		<div class="row">

 			<div class="col-md-12">
 				<div class="panel panel-info">
 					<div class="panel-heading">
 						Jurusan : <?php echo $_GET['jurusan'];?> // Kelas : <?php echo $_GET['kelas'];?> // ID Kuis : <?php echo $_GET['id_kuis'];?>
 					</div>
 					<!-- /.panel-heading -->
 					<div class="panel-body">
 						<div class="table-responsive">
 							<table class="table display">
 								<thead >
 									<tr>
 										<th>No</th>
 										<th>Mata Pelajaran</th>
 										<th>Guru</th>
 										<th>Siswa</th>
 										<th>Nama Kuis</th>
 										<th>Nilai</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php
 									$a = $_GET['jurusan'];
 									$b = $_GET['kelas'];
 									$id_kuis = $_GET['id_kuis'];


 									$q = "SELECT kuis.id_kuis, mapel.nama_mapel, guru.nama_guru, siswa.nama_siswa, kuis.nama_kuis, sum(nilai_kuis.nilai) , nilai_kuis.dates FROM nilai_kuis
 									JOIN kuis on nilai_kuis.id_kuis=kuis.id_kuis
 									JOIN guru ON kuis.id_guru = guru.id_guru
 									JOIN mapel on guru.id_mapel=mapel.id_mapel
 									JOIN siswa on nilai_kuis.id_siswa=siswa.id_siswa
 									JOIN jurusan on siswa.id_jurusan=jurusan.id_jurusan
 									JOIN kelas on siswa.id_kelas=kelas.id_kelas
 									where siswa.id_jurusan='$a' and siswa.id_kelas='$b' and nilai_kuis.id_kuis='$id_kuis'
 									group by nilai_kuis.dates";
 									$sql = mysql_query($q);
 									$no = 1;

 									while($res = mysql_fetch_array($sql)){?>
 										<tr>
 											<?php
 											$a ="select kuis_detail.id_kuis from kuis_detail where id_kuis='$res[0]'";
 											$b = mysql_query($a);
 											$row = mysql_num_rows($b);
 											?>

 											<td><?php echo $no; ?></td>
 											<td><?php echo $res[1]; ?></td>
 											<td><?php echo $res[2]; ?></td>
 											<td><?php echo $res[3]; ?></td>                               
 											<td><?php echo $res[4]; ?></td>                               
 											<td>
 												<?php 
 												$numb = 100;
 												$nil = $res[5];
 												$fix = $nil*$numb/$row;

 												$num = $fix;
 												$formattedNum = number_format($num, 2);
 												echo $formattedNum;

 												?>
 											</td>                               

 										</tr>
 										<?php
 										$no++;
 									}
 									?>
 								</tbody>
 							</table>
 						</div>
 						<!-- /.table-responsive -->
 					</div>
 					<!-- /.panel-body -->
 				</div>
 				<!-- /.panel -->
 				<input class="pull-left" type='button' value='print' onclick=javascript:window.print();>


 			</div>

 		</div>
 	</div>
 </div>

