<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Form Registration</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="nama" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <label>Nick Name</label>
            <input type="text" class="form-control" name="nicknama" placeholder="Nick Name" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label>Telp Number</label>
            <input type="number" class="form-control" name="notelp" placeholder="Telp Number" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea name="alamat" class="form-control" placeholder="Address" required rows="3" required></textarea>
          </div>
          <div class="form-group">
          
         <?php $rand = rand(000000,999999); ?>
              <code style="color: #18c9e9;"><?php echo $rand; ?></code>
              <input type="text" name="code" class="form-control" style="width:150px;" placeholder="Input Code" required="required" />
              <input type="hidden" name="rcode" value="<?php echo $rand; ?>" />
          </div>
        </div>
        <div class="modal-footer">
           <button type="reset" class="btn btn-outline btn-danger">Reset</button>
          <button type="submit" class="btn btn-outline btn-primary" name="daftar">Sign Up</button>

        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Login Member</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="masuk" value="masuk" />
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline btn-info">Login</button>

        </div>
      </form>
    </div>
  </div>
</div>