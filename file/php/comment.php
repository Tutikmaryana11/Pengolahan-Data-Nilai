<?php
$q = "SELECT nama, tgl, isikomentar FROM user JOIN komentar ON user.email=komentar.email WHERE komentar.kdbarang='$_GET[kd]'";
$sql = mysql_query($q);
?>

                                
                                <div class="row isi-komentar">
                                
                                    <div class="col-md-12">

                                        <?php
                                        while ($rk = mysql_fetch_array($sql)) {

                                        ?>
                                    
                                        <div class="row">

                                            <div class="col-md-2 col-xs-4">

                                                <div class="image">

                                                    <span class="fa fa-user"></span>

                                                </div>

                                            </div>
                                        
                                            <div class="col-md-10 col-xs-8 text">
                                            
                                                <strong><?php echo $rk[0]; ?></strong> &#45; <em><?php echo $rk[1]; ?></em><br />
                                                <p><?php echo $rk[2]; ?></p>
                                            
                                            </div>
                                        
                                        </div>

                                        <?php
                                        }
                                        ?>
                                    
                                    </div>
                                
                                </div>
                                <?php
                                if(!isset($_SESSION['loginNama'])){
                                ?>
                                <div class="row">
                                
                                    <div class="col-md-12">
                                        <p><strong>Silahkan <a href="#" data-toggle="modal" data-target="#masuk">Masuk</a> atau <a href="#" data-toggle="modal" data-target="#daftar">Daftar</a> untuk memberikan komentar</strong></p>
                                    </div>
                                
                                </div>
                                <?php
                                }
                                ?>
                                
                                <div class="row">
                                
                                    <div class="col-md-12">
                                        <form role="form" method="post">
                                        
                                            <div class="form-group">
                                            
                                                <label>Komentar kamu : </label><br />
                                                <textarea class="form-control" required rows="3" name="komentar" <?php if(!isset($_SESSION['loginNama'])) echo 'readonly'; ?> placeholder="Komentar kamu"></textarea>
                                            
                                            </div>
                                            <div class="form-group">
                                                
                                                <label>4 + 5 : </label><br />
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                                        <input class="form-control" type="number" name="chapta" <?php if(!isset($_SESSION['loginNama'])) echo 'readonly'; ?> required size="5" />
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                            <div class="form-group">
                                                        
                                                <button type="reset" class="btn btn-default" <?php if(!isset($_SESSION['loginNama'])) echo 'disabled'; ?> >Reset</button>
                                                    
                                                <button type="submit" class="btn btn-primary" name="kirimkomentar" <?php if(!isset($_SESSION['loginNama'])) echo 'disabled'; ?> >Kirim Komentar</button>
                                            
                                            </div>
                                        
                                        </form>
                                    </div>
                                
                                </div>