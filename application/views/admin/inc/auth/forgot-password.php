<div class="login-box">
      <div class="login-logo">
        <?php echo lang('forgot_password_heading');?>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo $message;?></p>
<style>
  input {width:100%;}
</style>
          <?php echo form_open("auth/forgot_password");?>
          <div class="form-group has-feedback">
            <small style="font-size:10pt;"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></small>
            <br /><br />
            <label for="email">
              <?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?>
            </label> <br />
            <?php echo form_input($email);?>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <?php echo form_submit('submit', lang('forgot_password_submit_btn'));?>
            </div><!-- /.col -->
          </div>
      <?php echo form_close();?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
