     <?php 
     $id = $_SESSION['id_guru'];

     $a = "select id_mengajar from mengajar where id_guru = '$id'";
     $b = mysql_query($a);
     $c = mysql_fetch_array($b);
     ?>

     <?php include_once 'lib/operation/tugas/auto.php';?>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-file"></span> Tugas Siswa</h1>
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
                                <i class="fa fa-file"></i> Tugas Siswa
                            </li>
                        </ol>
                  </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

             <div class="row">
             <div class="col-lg-12">
                  <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-word-o"></i> Detail Tugas Siswa
                            </div>
                    <div class="panel-body">
                                <div class="table-responsive dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>ID TUgas</th>
                                                <th>Nama Tugas</th>
                                                <th>Expired Date</th>
                                                <th  align="center">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          $id=$_SESSION['id_guru'];
                                          $q = "SELECT * from tugas
                                          JOIN kelas on tugas.id_kelas=kelas.id_kelas
                                          JOIN jurusan on tugas.id_jurusan=jurusan.id_jurusan
                                          JOIN mengajar on tugas.id_mengajar=mengajar.id_mengajar
                                          JOIN guru on mengajar.id_guru=guru.id_guru
                                          where guru.id_guru = '$id'
                                          ORDER BY tugas.id_tugas ASC";
                                          $sql = mysql_query($q);
                                          $no = 1;
                                          while($res = mysql_fetch_array($sql)){?>
                                            <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $res['id_tugas']; ?></td>
                                              <td><?php echo $res['nama_tugas']; ?></td>
                                              <td><?php echo $res['batas_waktu']; ?></td>
                                              <td>
                                                <a title="Detail Tugas Siswa" href="index.php?view=detail_tugas_siswa&id_tugas=<?php echo $res['id_tugas'];?>"><i class="fa fa-eye"> Detail Kumpul Tugas</i></a>

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
                 </div>
            </div>

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 <script type="text/javascript" charset="utf-8">
     $(document).ready(function() {
      $('#dataTables-example').DataTable();
      });

     $('#datetimepicker').datetimepicker({
      dayOfWeekStart : 1,
      lang:'en',
      disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
      startDate:  '1986/01/05'
      });
      $('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

      $('.some_class').datetimepicker();

      $('#default_datetimepicker').datetimepicker({
        formatTime:'H:i',
        formatDate:'d.m.Y',
        //defaultDate:'8.12.1986', // it's my birthday
        defaultDate:'+03.01.1970', // it's my birthday
        defaultTime:'10:00',
        timepickerScrollbar:false
      });
  </script>