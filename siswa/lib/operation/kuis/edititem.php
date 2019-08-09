    <?php $id = $_SESSION['id_guru'];$a = "select id_mengajar from mengajar where id_guru = '$id'";$b = mysql_query($a);$c = mysql_fetch_array($b);?>
    
    <?php 
    $id = $_GET['id_kuis'];
    $id_pertanyaan = $_GET['id_pertanyaan'];

    $data = "select * from kuis_detail
    JOIN kuis ON kuis_detail.id_kuis=kuis.id_kuis
    where kuis.id_kuis = '$id' and kuis_detail.id_pertanyaan='$id_pertanyaan'";

    $query = mysql_query($data);
    $array = mysql_fetch_array($query);
    ?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><span class="fa fa-table"></span> Kuis</h1>
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
                <i class="fa fa-table"></i> Kuis
              </li>
            </ol>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              Kuis forms
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6">
                  <form role="form" method="post" action="index.php?view=edit_kuis_p&id_kuis=<?php echo $array['id_kuis'];?>&id_pertanyaan=<?php echo $array['id_pertanyaan'];?>">
                    <input type="hidden" name="aksi" value="simpan">

                    <div class="form-group">
                      <label>ID Kuis</label>
                      <input type="text" class="form-control" name="id_kuis" value="<?php echo $array['id_kuis'];?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>ID Mapel</label>
                      <input type="text" class="form-control" name="id_kuis" value="<?php echo $array['id_pertanyaan'];?>" readonly>

                    </div>
                    <div class="form-group">
                      <label>Nama Kuis</label>
                      <input type="text" class="form-control" name="nama_kuis" placeholder="Enter text" value="<?php echo $array['nama_kuis'];?>" required>
                    </div>
                    <div class="form-group">
                      <label>Batas Waktu</label>
                      <input type="text" class="form-control" name="expired" placeholder="Enter text" value="<?php echo $array['expired'];?>" required>
                    </div>

                  </div>
                  <div class="col-lg-6">
                   <div class="form-group">
                    <label>Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" placeholder="Enter text" name="pertanyaan" value="<?php echo $array['pertanyaan'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jawaban A</label>
                    <input type="text" class="form-control" id="jawabana" placeholder="Enter text" name="jawabana" value="<?php echo $array['jawabana'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jawaban B</label>
                    <input type="text" class="form-control" id="jawabanb" placeholder="Enter text" name="jawabanb" value="<?php echo $array['jawabanb'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jawaban C</label>
                    <input type="text" class="form-control" id="jawabanc" placeholder="Enter text" name="jawabanc" value="<?php echo $array['jawabanc'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jawaban D</label>
                    <input type="text" class="form-control" id="jawaband" placeholder="Enter text" name="jawaband" value="<?php echo $array['jawaband'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jawaban E</label>
                    <input type="text" class="form-control" id="jawabane" placeholder="Enter text" name="jawabane" value="<?php echo $array['jawabane'];?>">
                  </div>
                  <div class="form-group">
                    <label>Kunci</label>
                    <input type="text" class="form-control" id="kunci" placeholder="Enter text" name="kunci" value="<?php echo $array['kunci'];?>">
                  </div>

                  <input type="hidden" name="id_mengajar" value="<?php echo $c['id_mengajar'];?>">
                  <input type="hidden" name="id_guru" value="<?php echo $_SESSION['id_guru'];?>">

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
      <button type="submit" class="btn btn-default">Submit Button</button>
      <button type="reset" class="btn btn-default">Reset Button</button>
    </form>


  </div>
      <!-- /#page-wrapper -->
<script>
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