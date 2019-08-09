
<?php 
// error_reporting(0);
include_once 'lib/operation/siswa/auto.php';
$id_siswa = $_GET['penghargaan_id_siswa'];
$sql = mysql_query("SELECT s.*,ak.ayah_nama,ik.ibu_nama, ws.wali_nama FROM siswa s 
  join ayah_kandung ak on ak.ayah_id = s.ayah_id
  join ibu_kandung ik on ik.ibu_id = s.ibu_id
  join wali_siswa ws on ws.wali_id = s.wali_id
  left join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
  WHERE s.id_siswa = $id_siswa");
$data = mysql_fetch_array($sql);

?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="fa  fa-info-circle
        "></span> Detail Penghargaan</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div>
          <ol class="breadcrumb">
            <li>
              <i class="fa fa-dashboard"></i>  <a href="index.php?view=home">Dashboard</a>
            </li>
            <li class="active">
              <i class="fa fa-star-half-o"></i> <a href="index.php?view=penghargaan">Penghargaan</a>
            </li>
            <li class="active">
              <i class="fa fa-info-circle"></i> Detail Penghargaan
            </li>
          </ol>
        </div>
        <div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h4>Detail Siswa <?php echo $data['nama_siswa'];?></h4>
                  <div class="table-responsive">
                    <h4><p><i>Biodata</i></p></h4>
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <!-- <th></th> -->
                          <th>
                            ID Siwa
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            J.Kelamin
                          </th>
                          <th>
                            Agama
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Ayah
                          </th>
                          <th>
                            Ibu
                          </th>
                          <th>
                            Wali
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <th><?php echo $data['id_siswa']?></th>
                          <td>
                            <code><?php echo $data['nama_siswa']?></code>
                          </td>
                          <td>
                            <code><?php echo $data['alamat']?></code>
                          </td>
                          <td>
                            <code><?php if ($data['jenis_kelamin']=='P') {?>

                              Perempuan
                              <?php } else { ?>
                                Laki-Laki
                                <?php } ?>
                              </code>
                            </td>
                            <td>
                              <code><?php echo $data['agama']?></code>
                            </td>
                            <td>
                              <code><?php echo $data['email']?></code>
                            </td>
                            <td>
                              <code><?php echo $data['ayah_nama']?></code>
                            </td>
                            <td>
                              <code><?php echo $data['ibu_nama']?></code>
                            </td>
                            <td>
                              <code><?php echo $data['wali_nama']?></code>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <h4><p><i>Penghargaan</i></p></h4>
                    <div class="table-responsive">
                      <div class="panel panel-info">
                        <?php 
                        $penghargaan_id = $_GET['penghargaan_id'];
                        $sqls = mysql_query("SELECT s.*,p.* FROM siswa s
                          left join penghargaan p on p.penghargaan_id_siswa = s.id_siswa
                          WHERE s.id_siswa = '$id_siswa' and p.penghargaan_id = '$penghargaan_id' ");
                        while ($datas = mysql_fetch_array($sqls)) { ?>
                        
                        <div class="panel-body">
                          <h4><?php echo $datas['penghargaan_keterangan'];?></h4>
                          <blockquote>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> -->
                            <small>Tingkat
                              <cite title="Source Title"><?php echo $datas['penghargaan_tingkat'];?></cite>
                            </small>
                            <?php if ($datas['penghargaan_juara']=='') {?>
                            
                            <?php } else { ?>
                               <small>Juara
                              <cite title="Source Title"><?php echo $datas['penghargaan_juara'];?></cite>
                            </small>
                            <?php } ?>

                            <?php 
                            if ($datas['penghargaan_medali']=='') { ?>
                            
                            <?php } else { ?>
                             <small>Medali
                              <cite title="Source Title"><?php echo $datas['penghargaan_medali'];?></cite>
                            </small>
                            <?php } ?>
                            
                             <small>Tahun
                              <cite title="Source Title"><?php echo $datas['penghargaan_tahun'];?></cite>
                            </small>
                           
                          </blockquote>
                        </div>

                        <?php } ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <script type="text/javascript" charset="utf-8">
   $(document).ready(function() {
    $('#dataTables-example').DataTable();
  });
</script>