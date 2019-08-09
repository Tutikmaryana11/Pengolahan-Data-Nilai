  <?php 
$a = mysql_query("SELECT count(n.id_nilai) as jumlah FROM nilai n join siswa s on s.id_siswa = n.id_siswa  where g.email='$_SESSION[email]'");
// $nilai = mysql_num_rows($a);

$b = mysql_query("SELECT * FROM berita");
$berita = mysql_num_rows($b);

?> 

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span class="fa fa-home"></span> Beranda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-th-list fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $a['jumlah'];?></div>
                            <div>Nilai!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=nilai">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $berita;?></div>
                            <div>Berita!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=berita">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $berita;?></div>
                            <div>More!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=nilai">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <!-- /.row -->
            
    <!-- /.col-lg-8 -->
</div>
<!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        </div>