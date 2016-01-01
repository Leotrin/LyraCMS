<!DOCTYPE html>
<html lang="en">
<?php include 'theme/head.php'; ?>
<body class="page-body">
<div class="page-container">
      <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                              <div class="panel-title">
                                <h1><?php echo lang('forgot_password_heading');?></h1>
                                <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
                              </div>
                              <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                              </div>
                        </div>
                        <div class="panel-body">

                        <div id="infoMessage"><?php echo $message;?></div>

                        <?php echo form_open("auth/forgot_password");?>

                              <p>
                              	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
                              	<?php echo form_input($email);?>
                              </p>

                              <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

                        <?php echo form_close();?>

                        </div>
                  </div>
            </div>
      </div>
      <footer class="col-md-12">
            Copyright &copy; 2015 <strong>Mangosoft</strong>
      </footer>
</div>
</body>
</html>
