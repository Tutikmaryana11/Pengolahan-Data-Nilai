<?php

function jurusan(){
  $q = "SELECT * FROM `jurusan` ORDER BY 'id_jurusan' ASC";
  $sql = mysql_query($q);
  while($res = mysql_fetch_array($sql)){
    echo "<option value='".$res[0]."'>".$res[1]."</option>";
  }
}
?>

<?php 
$id = $_SESSION['id_guru'];

$a = "select id_mengajar from mengajar where id_guru = '$id'";
$b = mysql_query($a);
$c = mysql_fetch_array($b);
?>

<script type="text/javascript">

  $(document).ready(function() {

    function getKel(kelas) {

      console.log(kelas);
      var rand_ku= Math.random();
      $.ajax( {

        type: 'post',
        url: 'lib/operation/nilai/get_kel_by_jur.php?id='+kelas+'&'+'rand='+rand_ku,
        data: '',
        cache: false,
        success: function(msg) {
         console.log(msg);   
         $('#kelasku').html(msg);

       }
     });

    }

    document.getElementById("form").jurusan.focus();
    $('#jurusan').change(function() {
      getKel(this.value);
    });
  });

</script>


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
      <div class="panel panel-default">
        <div class="panel-heading">
         Tugas Siswa forms
       </div>
       <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form role="form" method="post" id="form" action="index.php?view=insert_tugas" enctype="multipart/form-data">
              <div class="form-group">
                <label>ID Tugas</label>
                <input type="text" class="form-control" name="id_tugas" value="<?php echo $kd;?>" required>
              </div>

              <div class="form-group">
                <label>Nama Tugas</label>
                <input type="text" class="form-control" placeholder="Enter text" name="nama_tugas" required>
              </div>
              <div class="form-group">
                <label>Batas Waktu</label>
                <input class="form-control" placeholder="Enter text" name="batas_waktu" id="datetimepicker" required>
              </div>
              <div class="form-group">
                <label>Soal</label>
                <input type="file" class="form-control" placeholder="Enter text" name="files" accept=".doc, .docx" required>
              </div>
              <div class="form-group">
                <label>Jurusan</label>

                <select class="form-control" id="jurusan" name="id_jurusan">
                  <option value="">Pilih Jurusan</option>
                  <?php jurusan();?>

                </select>
              </div>                                                          

              <div class="form-group">
                <label>Kelas</label>

               <select name="id_kelas" id="kelasku" class="form-control">
                <option value="">Pilih Kelas</option>
              </select>
            </div> 
            <input type="hidden" name="id_mengajar" value="<?php echo $c['id_mengajar'];?>">


            <button type="submit" class="btn btn-default">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
          </form>
        </div>
        <!-- /.col-lg-6 (nested) -->

        <!-- /.col-lg-6 (nested) -->
      </div>
      <!-- /.row (nested) -->
    </div>
    <!-- /.panel-body -->

  </div>
  <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
 <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Jurusan
    </div>
    <div class="panel-body">
      <div class="table-responsive dataTable_wrapper">
       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead >
          <tr>
            <th>No</th>
            <th>ID Tugas</th>
            <th>Nama Tugas</th>
            <th>Batas Waktu</th>
            <th>Jurusan</th>
            
            <th>Kelas</th>
            <th  align="center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $q = "SELECT * FROM tugas 
          JOIN kelas on tugas.id_kelas=kelas.id_kelas
          JOIN jurusan on tugas.id_jurusan=jurusan.id_jurusan
          JOIN mengajar on tugas.id_mengajar=mengajar.id_mengajar
          JOIN guru on mengajar.id_guru=guru.id_guru
          where guru.id_guru = '$id'
          ORDER BY id_tugas ASC";
          $sql = mysql_query($q);
          $no = 1;
          while($res = mysql_fetch_array($sql)){?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $res[0]; ?></td>
              <td><?php echo $res[2]; ?></td>
              <td><?php echo $res[6]; ?></td>
              <td><?php echo $res['nama_jurusan']; ?></td>

              <td><?php echo $res['nama_kelas']; ?></td>
              <td>
                <a href=".././admin/data/soal_tugas/<?=$res['soal'];?>" target="_blank"><i class="fa fa-download"></i></a>
                &nbsp;&nbsp;
                <a onclick="return confirm('Anda yakin?')" href="index.php?view=delete_tugas&id_tugas=<?php echo $res[0];?>"><i class="fa fa-trash"></i></a>

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