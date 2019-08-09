<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMP N 2 Depok</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">



    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="../dataTable/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="../dataTable/bootstrap.min.js" type="text/javascript">></script>
    <script src="../dataTable/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../dataTable/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../dataTable/dataTables.responsive.js" type="text/javascript"></script>

    <link href="../dataTable/jquery.dataTables.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           
            <!-- Top Menu Items -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['email_admin'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <!--  <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
                        <!-- <li class="divider"></li> -->
                        <li>
                            <a onclick="return confirm('Anda yakin?')" href="index.php?view=signout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-top-links navbar-nav side-nav">
                <style type="text/css">
                    .logo{
                        padding: 10px 10px;
                    }
                </style>
                   <li class="sidebar-search" style="padding: 15px;">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                    <li>
                        <a href="index.php?view=home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   <!--  <li>
                        <a href="index.php?view=materi"><i class="fa fa-fw fa-book"></i> Materi</a>
                    </li> -->
                    <li>
                        <a href="index.php?view=mata_pelajaran"><i class="fa fa-fw fa-th-list"></i> Mata Pelajaran</a>
                    </li>
                
                    <li>
                        <a href="index.php?view=guru"><i class="fa fa-fw fa-user"></i> Guru</a>
                    </li>
                    <li>
                        <a href="index.php?view=siswa"><i class="fa fa-fw fa-users"></i> Siswa</a>
                    </li>
                    <li>
                        <a href="index.php?view=kelas"><i class="fa fa-fw fa-users"></i> Kelas</a>
                    </li>
                   
                    <li>
                        <a href="index.php?view=statistik"><i class="fa fa-fw fa-bar-chart-o
"></i> Statistik</a>
                    </li>
                     <li>
                        <a href="index.php?view=wali"><i class="fa fa-fw fa-users"></i> Wali</a>
                    </li>
                     <li>
                        <a href="index.php?view=ayah"><i class="fa fa-fw fa-users"></i> Ayah Kandung</a>
                    </li>
                     <li>
                        <a href="index.php?view=ibu"><i class="fa fa-fw fa-users"></i> Ibu Kandung</a>
                    </li>
                      <li>
                        <a href="index.php?view=berita"><i class="fa fa-fw fa-envelope"></i> Berita</a>
                    </li>
                     <li>
                        <a href="index.php?view=naik_kelas"><i class="fa fa-fw fa-envelope"></i>Naik Kelas</a>
                    </li>
                    <li>
                        <a href="index.php?view=laporan_nilai_tugas"><i class="fa fa-fw fa-file-word-o"></i> Laporan Nilai Per Mapel</a>
                    </li>
                    <li>
                        <a href="index.php?view=laporan_siswa"><i class="fa fa-fw fa-file-word-o"></i> Laporan Siswa</a>
                    </li>
                    <li>
                        <a href="index.php?view=view_laporan_mapel"><i class="fa fa-fw fa-file-word-o"></i> Laporan Mapel</a>
                    </li>
                    <li>
                        <a href="index.php?view=view_laporan_guru"><i class="fa fa-fw fa-file-word-o"></i> Laporan Guru</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <?php include 'module.php';?>
        <style type="text/css"> ul.ui-autocomplete.ui-menu{ display: inline-block; background-color:#0FF; } </style>
