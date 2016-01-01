  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo lang('create_user_heading');?>
            <small><?php echo lang('create_user_subheading');?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Create New User</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $message;?></h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            <style type="text/css">
              input {width:100%; }
            </style>
              <div class="row">
                <?php echo form_open("auth/create_user");?>
                <div class="col-sm-3 col-xs-6">
                  <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                  <?php echo form_input($first_name);?>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                  <?php echo form_input($last_name);?>
                  <?php
                  if($identity_column!=='email') {
                      echo '<p>';
                      echo lang('create_user_identity_label', 'identity');
                      echo '<br />';
                      echo form_error('identity');
                      echo form_input($identity);
                      echo '</p>';
                  }
                  ?>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <?php echo lang('create_user_company_label', 'company');?> <br />
                  <?php echo form_input($company);?>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <?php echo lang('create_user_email_label', 'email');?> <br />
                  <?php echo form_input($email);?>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <?php echo lang('create_user_phone_label', 'phone');?> <br />
                  <?php echo form_input($phone);?>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-4 col-xs-12">
                  <?php echo lang('create_user_password_label', 'password');?> <br />
                  <?php echo form_input($password);?>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                  <?php echo form_input($password_confirm);?>
                </div>
                <div class="clearfix"></div><hr />
                <div class="col-sm-3 col-xs-12">
                  <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>
                </div>

                <?php echo form_close();?>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->