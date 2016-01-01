  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo lang('edit_user_heading');?>
            <small><?php echo lang('edit_user_subheading');?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Edit User</a></li>
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
              <?php echo form_open(site_url('auth/edit_user/'.$user->id));?>
                <div class="col-sm-3 col-xs-6">
                  <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                  <?php echo form_input($first_name);?>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                  <?php echo form_input($last_name);?>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <?php echo lang('edit_user_company_label', 'company');?> <br />
                  <?php echo form_input($company);?>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                  <?php echo form_input($phone);?>
                </div>
                <div class="clearfix"></div><br />
                <div class="col-md-12" style="background:#ffcc00;padding:10px;">
                  <div class="col-sm-4 col-xs-12">
                    <?php echo lang('edit_user_password_label', 'password');?> <br />
                    <?php echo form_input($password);?>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?> <br />
                    <?php echo form_input($password_confirm);?>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6">
                   <?php if ($this->ion_auth->is_admin()): ?>

                        <h4><?php echo lang('edit_user_groups_heading');?></h4>
                        <?php foreach ($groups as $group):?>

                            <div class="checkbox">
                            <label class="checkbox">
                            <?php
                                $gID=$group['id'];
                                $checked = null;
                                $item = null;
                                foreach($currentGroups as $grp) {
                                    if ($gID == $grp->id) {
                                        $checked= ' checked="checked"';
                                    break;
                                    }
                                }
                            ?>
                              <input type="checkbox" name="groups[]"  value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                              </label>
                            </div>
                        <?php endforeach?>

                    <?php endif ?>

                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>
                </div>
                <div class="clearfix"></div><hr />
                <div class="col-sm-3 col-xs-12">
                  <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>
                </div>

                <?php echo form_close();?>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->