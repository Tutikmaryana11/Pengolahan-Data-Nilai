 <?php
 $a = "select * from admin where id_admin = '$_GET[id_admin]'";
 $b = mysql_query($a);
 $c = mysql_fetch_array($b);
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-table"></span> Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="index.php?view=edit_admin_p&id_admin=<?php echo $c['id_admin'];?>">
                                        <div class="form-group">
                                            <label>ID Admin</label>
                                            <input type="text" class="form-control" name="id_admin" value="<?php echo $c['id_admin'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="nama" value="<?php echo $c['nama'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter text" name="email" value="<?php echo $c['email'];?>" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="Enter text" name="password" value="<?php echo $c['password'];?>" required>
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


