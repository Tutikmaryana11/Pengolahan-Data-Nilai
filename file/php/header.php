<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image" href="file/img/favicon.png" />

    <title>Joglo Silver</title>

    <!-- Bootstrap Core CSS -->
    <link href="file/css/bootstrap.min.css" rel="stylesheet">
    <link href="file/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="file/css/agency.css" rel="stylesheet">
    <link href="file/dist/metisMenu.min.css" rel="stylesheet">
    <link href="file/dist/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="file/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
<div class="row">

                    <div class="col-md-4 navbar-header page-scroll">

                        <a class="navbar-brand page-scroll" href="index.php">Joglo Silver</a>
                    
                    

                    </div>

                    <div class="col-md-7 col-md-offset-1">

                        <div class="row">

                            <div class="col-xs-8">
                                <form method="get" action="search.php">
                                    <div class="input-group">
                                    
                                        <input type="search" name="q" placeholder="Cari" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    
                                    </div>
                                </form>

                            </div>
                            <ul class="nav navbar-nav navbar-left">


                         <?php
                        if(!isset($_SESSION['loginNama'])){ ?>
                        <?php
                        }else {  ?>
                        <li><a href="profile.php"><strong><i class="fa fa-user"></i> <?php echo $_SESSION['loginNama'] ?></strong></a></li>
                        
                        <?php
                        }
                        ?>   
                    </ul>   

                           

                        </div>

                    </div>

                </div>
                

    <!-- Navigation -->
    
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               

            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
            <?php
            $qkw = "SELECT * FROM `jenis` ORDER BY nmjenis ASC";
            $sqlkw = mysql_query($qkw);
            while($reskw = mysql_fetch_array($sqlkw)){ ?>

                        <li><a href="kategori.php?k=<?php echo $reskw[0] ?>"><?php echo $reskw[1] ?></a></li>

            
            <?php
            }
            ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="" data-toggle="modal" data-target="#sign">Sign</a></li>
                    <li><a href="index.php?#product">Product</a></li>
                    <li><a href="index.php?#about">About Us</a></li>
                    <li><a href="shopchart.php"><span class="fa fa-shopping-cart"></span> Rp. <?php echo $_SESSION['total']; ?></a></li>
                                         
                    </ul>
                </div>
           
                                 

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        </div>
    </nav>