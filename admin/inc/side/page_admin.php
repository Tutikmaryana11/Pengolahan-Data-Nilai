<?php 
$a = mysql_query("SELECT * FROM mapel");
$mapel = mysql_num_rows($a);


$c = mysql_query("SELECT * FROM guru");
$guru = mysql_num_rows($c);

$d = mysql_query("SELECT * FROM siswa");
$siswa = mysql_num_rows($d);


$h = mysql_query("SELECT * FROM wali_siswa");
$wali = mysql_num_rows($h);

$i = mysql_query("SELECT * FROM ayah_kandung");
$ayah = mysql_num_rows($i);

$j = mysql_query("SELECT * FROM ibu_kandung");
$ibu = mysql_num_rows($j);

?> 

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><span class="fa fa-home"></span> Beranda</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
      <div class="row">
        <div class="col-lg-12">
    </div>
    <!-- /.col-lg-8 -->
</div>
<!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-th-list fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $mapel?></div>
                            <div>Mata Pelajaran!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=mata_pelajaran">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $guru;?></div>
                            <div>Guru!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=guru">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $siswa;?></div>
                            <div>Siswa!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=siswa">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <!-- /.row -->
    <!-- UNTUK PRESTASI SISWA -->
 
        <div class="col-lg-3 col-md-6">
           
        </div>
    </div>
    <!-- /.row -->
    <!-- END PRESTASI SISWA -->
    
    <!-- BIODATA ORANG TUA SISWA -->
            <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $wali?></div>
                            <div>wali!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=wali">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $ayah;?></div>
                            <div>ayah!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=ayah">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-fw fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $ibu;?></div>
                            <div>ibu!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?view=ibu">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
           
        </div>
    </div>
    <!-- END BIODATA -->

  
</div>
<!-- /#page-wrapper -->
</div>