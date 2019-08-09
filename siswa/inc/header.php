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
    <script src="../dataTable/jquery.datetimepicker.full.js" type="text/javascript"></script>


    <link href="../dataTable/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <link href="../dataTable/jquery.datetimepicker.css" rel="stylesheet" type="text/css">
    

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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['email'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      
                        <li>
                            <a onclick="return confirm('Anda yakin?')" href="index.php?view=signout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-top-links navbar-nav side-nav">
                     <ul class="nav navbar-nav side-nav">
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
                        <a href="index.php?view=materi"><i class="fa fa-fw fa-upload"></i>Upload Materi</a>
                    </li>
                    <li>
                        <a href="index.php?view=tugas"><i class="fa fa-fw fa-file"></i> Tugas Siswa</a>
                    </li>
                    <li>
                        <a href="index.php?view=lihat_tugas_siswa"><i class="fa fa-fw fa-file"></i> Lihat Tugas Siswa</a>
                    </li>
                    <li>
                        <a href="index.php?view=nilai_tugas_siswa"><i class="fa fa-fw fa-file"></i> Nilai Tugas Siswa</a>
                    </li>
                    <li>
                        <a href="index.php?view=soal_kuis"><i class="fa fa-fw fa-th-list"></i> Soal Kuis</a>
                    </li>
                    <li>
                        <a href="index.php?view=view_kuis"><i class="fa fa-fw fa-th-list"></i> Lihat Kuis</a>
                    </li> -->
                    <!-- <li>
                        <a href="index.php?view=nilai"><i class="fa fa-fw fa-list"></i> Nilai</a>
                    </li> -->
                    <li>
                        <a href="index.php?view=berita"><i class="fa fa-fw fa-envelope"></i> Berita</a>
                    </li>
                    <li>
                        <a href="index.php?view=laporan_nilai_tugas"><i class="fa fa-fw fa-file-word-o"></i> Laporan Nilai</a>
                    </li>
                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <?php include 'module.php';?>
        <style type="text/css"> ul.ui-autocomplete.ui-menu{ display: inline-block; background-color:#0FF; } </style>
