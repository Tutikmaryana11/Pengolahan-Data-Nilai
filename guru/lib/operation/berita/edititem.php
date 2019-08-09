     <?php 
     $id_berita = $_GET['id_berita'];
     $id = $_SESSION['id_guru'];

     $a = "select id_mengajar from mengajar where id_guru = '$id'";
     $b = mysql_query($a);
     $c = mysql_fetch_array($b);

     $berita = "select* from berita where id_berita = '$id_berita'";
     $ber = mysql_query($berita);
     $sh = mysql_fetch_array($ber);
     ?>

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-upload"></span> Edit Berita</h1>
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
                                <i class="fa fa-upload"></i> Edit Berita
                            </li>
                        </ol>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Berita forms
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_berita_p&id_berita=<?php echo $id_berita;?>" enctype="multipart/form-data">
                                        <input type="hidden" name="id_guru" value="<?php echo $id;?>">
                                        <div class="form-group">
                                            <label>ID Berita</label>
                                            <input type="text" class="form-control" name="id_berita" value="<?php echo $sh['id_berita'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Berita</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_berita" value="<?php echo $sh['nama_berita'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita</label>
                                            <textarea type="text" class="form-control" placeholder="Enter text" name="isi_berita" required><?php echo $sh['isi_berita'];?></textarea>
                                        </div>

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
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
