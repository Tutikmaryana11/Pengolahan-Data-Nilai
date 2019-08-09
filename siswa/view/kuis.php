      <?php 
      $id = $_SESSION['id_guru'];

      $a = "select id_mengajar from mengajar where id_guru = '$id'";
      $b = mysql_query($a);
      $c = mysql_fetch_array($b);
      ?>

      <?php
      function id_mapel(){
       $id = $_SESSION['id_guru'];
       $q = "SELECT * FROM `mengajar`
       JOIN mapel on mengajar.id_mapel=mapel.id_mapel
       where mengajar.id_guru='$id'
       ORDER BY mengajar.id_mapel ASC";
       $sql = mysql_query($q);
       while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res['id_mapel']."'>".$res['id_mapel']." -- ".$res['nama_mapel']."</option>";
      }
    }

    ?>

    <!--PEMBAGIAN FUNGSI, INI FUNGSI TANPA LOADING, UNTUK SUBMIT FORM DATA PEMBELIAN-->
    <script type="text/javascript">

      function remove(index){
        $.post("lib/operation/kuis/additem_proc.php", {"aksi": "del", "index": index},
          function(data){
          });
      }

      function clear(){
        $("#pertanyaan").val('');
        $("#jawabana").val('');
        $("#jawabanb").val('');
        $("#jawabanc").val('');
        $("#jawaband").val('');
        $("#jawabane").val('');
        $("#kunci").val('');
        $("#pertanyaan").focus();
      }

      function keranjang(){
                //console.log('keranjang upd');
                $.post("lib/operation/kuis/additem_proc.php",
                  {"aksi": "show"},
                  function(data){
                    hasil="";
                    console.log(data);
                    $.each(data, function(i, datas){                    
                      hasil += "<tr>";
                      hasil +=  "<td>"+datas['index']+"</td>";
                      hasil +=  "<td>"+datas['pertanyaan']+"</td>";
                      hasil +=  "<td>"+datas['jawabana']+"</td>";
                      hasil +=  "<td>"+datas['jawabanb']+"</td>";
                      hasil +=  "<td>"+datas['jawabanc']+"</td>";
                      hasil +=  "<td>"+datas['jawaband']+"</td>";
                      hasil +=  "<td>"+datas['jawabane']+"</td>";
                      hasil +=  "<td>"+datas['kunci']+"</td>";
                      hasil += "</tr>";
                      
                    });
                    $('#keranjang').html(hasil);
                  }, 'json').fail(function(xhr, txterr, thrown){console.log(xhr.responseText);});
              }

              setInterval(keranjang, 1000);

              $(function(){

                $('table.display').dataTable();
                $("#kunci").keypress(function(e){
                  if(e.which == '13'){
                    pertanyaan = $("#pertanyaan").val();
                    kunci = $("#kunci").val();
                    if($("#kunci").val()==""){
                      alert("kunci jawaban harus diisi");
                      $("#kunci").focus();
                    }
                    if($("#pertanyaan").val()==""){
                      alert("pertanyaan harus diisi");
                      $("#pertanyaan").focus();
                    }
                    if($("#jawabana").val()==""){
                      alert("jawabana harus diisi");
                      $("#jawabana").focus();
                    }else{
                      $.post("lib/operation/kuis/additem_proc.php", {"aksi": "add", 
                        "pertanyaan": $("#pertanyaan").val(), 
                        "jawabana": $("#jawabana").val(), 
                        "jawabanb": $("#jawabanb").val(), 
                        "jawabanc": $("#jawabanc").val(), 
                        "jawaband": $("#jawaband").val(), 
                        "jawabane": $("#jawabane").val(), 
                        "kunci": $("#kunci").val()}, 
                        function(data){
                          if(data){
                            //alert(data);
                            $("#pertanyaan").focus();
                            clear();
                          }else{

                          }
                        });
                    }
                    return false;
                  }
                });          
                
              });
            </script>

            <?php include_once 'lib/operation/kuis/auto.php';?>

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
                          <form role="form" method="post" action="index.php?view=insert_kuis">
                            <input type="hidden" name="aksi" value="simpan">

                            <div class="form-group">
                              <label>ID Kuis</label>
                              <input type="text" class="form-control" name="id_kuis" value="<?php echo $kd;?>" required>
                            </div>
                            <div class="form-group">
                              <label>ID Mapel</label>
                              <select class="form-control" name="id_mapel">
                                <?php id_mapel();?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Nama Kuis</label>
                              <input type="text" class="form-control" name="nama_kuis" placeholder="Enter text" required>
                            </div>
                            <div class="form-group">
                              <label>Batas Waktu</label>
                              <input type="text" id="datetimepicker" class="form-control" name="expired" placeholder="Enter text" required>
                            </div>
                            
                          </div>
                          <div class="col-lg-6">
                           <div class="form-group">
                            <label>Pertanyaan</label>
                            <input type="text" class="form-control" id="pertanyaan" placeholder="Enter text" name="pertanyaan">
                          </div>
                          <div class="form-group">
                            <label>Jawaban A</label>
                            <input type="text" class="form-control" id="jawabana" placeholder="Enter text" name="jawabana">
                          </div>
                          <div class="form-group">
                            <label>Jawaban B</label>
                            <input type="text" class="form-control" id="jawabanb" placeholder="Enter text" name="jawabanb">
                          </div>
                          <div class="form-group">
                            <label>Jawaban C</label>
                            <input type="text" class="form-control" id="jawabanc" placeholder="Enter text" name="jawabanc">
                          </div>
                          <div class="form-group">
                            <label>Jawaban D</label>
                            <input type="text" class="form-control" id="jawaband" placeholder="Enter text" name="jawaband">
                          </div>
                          <div class="form-group">
                            <label>Jawaban E</label>
                            <input type="text" class="form-control" id="jawabane" placeholder="Enter text" name="jawabane">
                          </div>
                          <div class="form-group">
                            <label>Kunci</label>
                            <input type="text" class="form-control" id="kunci" placeholder="Enter text" name="kunci">
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


              <div class="row">
               <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    Hover Rows
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive dataTable_wrapper">
                     <table class="table table-striped table-bordered table-hover">
                      <thead >
                        <tr>
                          <th>No</th>
                          <th>Pertanyaan</th>
                          <th>Jawaban A</th>
                          <th>Jawaban B</th>
                          <th>Jawaban C</th>
                          <th>Jawaban D</th>
                          <th>Jawaban E</th>
                          <th>Kunci</th>
                        </tr>
                      </thead>
                      <tbody id="keranjang">                                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>

              </div>
              <button type="submit" class="btn btn-default">Submit Button</button>
              <button type="reset" class="btn btn-default">Reset Button</button>
            </form>
            
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