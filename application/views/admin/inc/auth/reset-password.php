<div class="login-box">
      <div class="login-logo">
        <?php echo lang('reset_password_heading');?>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo $message;?></p>
<style>
  input {width:100%;}
</style>
          <?php echo form_open('auth/reset_password/' . $code);?>
          <div class="form-group has-feedback">
            <label for="new_password">
              <?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?>
            </label> <br />
            <?php echo form_input($new_password);?>
          </div>
          <div class="form-group has-feedback">
            <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
          </div>
          <div class="form-group has-feedback">
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
          </div>
          <div class="row">
            <div class="col-xs-8">
            	<?php echo form_input($user_id);?>
              <?php echo form_hidden($csrf); ?>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <?php echo form_submit('submit', lang('reset_password_submit_btn'));?>
            </div><!-- /.col -->
          </div>
      <?php echo form_close();?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
