 <?php
 $a = "select * from client where id_client = '$_GET[id_client]'";
 $b = mysql_query($a);
 $c = mysql_fetch_array($b);
 ?>

     <?php include_once 'inc/side/side_menu.php';?>
     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-users"></span> Client</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Client forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_client_p">
                                        <div class="form-group">
                                            <label>ID Client</label>
                                            <input type="text" class="form-control" name="id_client" value="<?php echo $c['id_client'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama CEO</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_ceo" value="<?php echo $c['nama_ceo'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Client</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama_client" value="<?php echo $c['nama_client'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="username" value="<?php echo $c['username'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="password" value="<?php echo $c['password'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="alamat" value="<?php echo $c['alamat'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input type="number" class="form-control" placeholder="Enter text" name="no_hp" value="<?php echo $c['no_hp'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Perusahaan</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="jenis" value="<?php echo $c['jenis'];?>" required>
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

 

  


