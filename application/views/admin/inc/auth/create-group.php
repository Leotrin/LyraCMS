  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo lang('create_group_heading');?>
            <small><?php echo lang('create_group_subheading');?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Create New Group</a></li>
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
				<?php echo form_open("auth/create_group");?>
                <div class="col-sm-3 col-xs-6">
                  	<?php echo lang('create_group_name_label', 'group_name');?> <br />
            		<?php echo form_input($group_name);?>
                </div>
                <div class="col-sm-3 col-xs-6">
                  	<?php echo lang('create_group_desc_label', 'description');?> <br />
            		<?php echo form_input($description);?>
                </div>
                
                <div class="clearfix"></div><hr />
                <div class="col-sm-3 col-xs-12">
                  <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>
                </div>

                <?php echo form_close();?>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->