		 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Joglo Silver 2015 powered by <a href="http://instagram.com/ymustaqim" target="_blank"><b><br>Al Mustaqim</b></a></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="http://www.twitter.com/joglosilver" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="http://www.facebok.com/joglosilver" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="http://www.instagram.com/joglosilver" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                         
                            
                        
                        
                    </ul>

                </div>

            </div>
        </div>

    </footer>
 
        <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Purchasing Method</h4>
                </div>
                <div class="modal-body">

                    <?php
                    if (!isset($_SESSION['loginNama'])) {?>

                          <button type="button" class="btn btn-outline btn-info" data-toggle="modal" data-target="#daftar">Sign Up</button>
                        <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#masuk">Sign In</button>

                    <?php
                    }else{
                    ?>
                    
                    <form method="post" action="chekout.php">
                        <div class="form-group">
                            <label>Shipping Address</label>
                            <textarea name="alamatTujuan" required placeholder="Alamat Pengiriman / Shipping Address" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline btn-primary">Send</button>
                            <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                        </div>
                    </form>

                    <?php
                    }
                    ?>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>

        <!--section sign-->
        <div class="modal fade" id="sign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Sign Method</h4>
                </div>
                <div class="modal-body">

                    <?php
                    if (!isset($_SESSION['loginNama'])) {?>

                          <button type="button" class="btn btn-outline btn-info" data-toggle="modal" data-target="#daftar">Sign Up</button>
                        <button type="button" class="btn btn-outline btn-primary" data-toggle="modal" data-target="#masuk">Sign In</button>

                    <?php
                    }else{
                    ?>
                    
                    <a href="logout.php" onclick="return confirm('Are you sure?')">
                        <button type="button" class="btn btn-outline btn-primary btn-lg" align='center'>Sign Out</button>
                    </a>

                    <?php
                    }
                    ?>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>

         <?php
        if(!isset($_SESSION['loginNama'])){
            include 'register-login.php';
        }
        ?>

        

		<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
            $(window).scroll(function() {
                if($(this).scrollTop() > 100){
                    $('.scrollup').fadeIn();
                }else{
                    $('.scrollup').fadeOut();
                }
                if($(this).scrollTop() > 79){
                    $('.navbar').addClass('navbar-fixed-top');
                }else{
                    $('.navbar').removeClass('navbar-fixed-top');
                }
            });
                
            $('.scrollup').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

           $('#pesan').change(function(){
                $('#subtotal').val($('#pesan').val() * $('#harga').val());
           });
           $('#pesan').keyup(function(){
                $('#subtotal').val($('#pesan').val() * $('#harga').val());
           });
        });
        </script>

         <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>

         <!-- jQuery -->
    <script src="file/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="file/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="file/js/classie.js"></script>
    <script src="file/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="file/js/jqBootstrapValidation.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="file/js/agency.js"></script>
	</body>

</html>