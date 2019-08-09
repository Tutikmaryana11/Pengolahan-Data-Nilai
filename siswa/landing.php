<style type="text/css">
    .mar{
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 30px;
    }
    .gin{
        padding-left: 140px;
    }
    .bottom{
        margin-top: 0px;
        margin-bottom: -10px;
    }
</style>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page : SMA N 1 PAMOTAN</title>
        <link rel="stylesheet" type="text/css" href="../file/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../file/css/admin.css" />
    </head>

    <body class="body-login">
         
        <div class="row ">
            <div class="col-md-4 col-md-offset-4" style="margin-top:10%">
               <div class="login-panel panel panel-default">
                <p class="login-box-msg"><h3 align="center">LOGIN PAGE</h3> </p>
                <hr>
                    <div class="panel-body tooltip-demo" >
                            <form action="../process/signin.php" method="post">

                                <div class="row mar">
                                    <div class="pull-left">
                                        <img src="../file/img/logo.jpg" width="100">
                                    </div>
                                    <div align="justify" class="gin">
                                        <h3 class="bottom"><b>SMA N 1 PAMOTAN</b></h3> <br>
                                        PAMOTAN REMBANG<br>
                                        Tlp. 0274 - 4363047 / 082137717717<br>
                                        support@sman1pamotan.sch.id<br>
                                        
                                    </div>
                                    
                                </div>
                                <hr>

                                 <div class="form-group has-feedback">
                                    <input type="email" name="email" class="form-control" placeholder="Email" data-toggle="tooltip" data-placement="top" title="Your Username" required>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                 </div>
                                 <div class="form-group has-feedback">
                                    <input type="password" name="password" class="form-control" placeholder="Password" data-toggle="tooltip" data-placement="top" title="Your password" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                  </div>
                                  <div class="row">
                                        <div class="col-xs-4 pull-peft">
                                        <select class="form-control" name="level" required>
                                                        <option value="admin">Admin</option>
                                                        <option value="guru">Guru</option>
                                                        <option value="siswa">Siswa</option>
                                                    </select>
                                          
                                        </div><!-- /.col -->
                                        <div class="col-xs-8">
                                          <button type="submit" class="btn btn-primary btn-block btn-flat" data-toggle="tooltip" data-placement="top" title="Click here to sign in">Sign In</button>
                                        </div><!-- /.col -->
                                      </div>
                            </form>
                    </div><!-- /.login-box-body -->

                </div>
            </div>
        </div>
     
    </body>

</html>
