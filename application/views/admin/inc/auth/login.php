<div class="login-box">
      <div class="login-logo">
        <a href=""><b>CY</b>OE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo $message;?></p>

        <?php echo form_open("auth/login");?>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="identity" id="identity" placeholder="Username" autocomplete="off" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
                <label>
                  <?php echo lang('login_remember_label', 'remember');?>
                  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </label>
              <div class="checkbox icheck">
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login_submit_btn">
                <i class="entypo-login"></i>
                Login In
              </button>
            </div><!-- /.col -->
          </div>
      <?php echo form_close();?>

      <p><a href="forgot_password" class="text-center"><?php echo lang('login_forgot_password');?></a></p>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
