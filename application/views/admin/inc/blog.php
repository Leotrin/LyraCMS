<?php
	if(isset($editPost)):
		foreach($editPost as $p):
			$pid = $p['id'];
			$ptitle = $p['title'];
			$pcontent = $p['content'];
		endforeach;
		$action = base_url('admin/blog/edit/'.$pid);
	else:
		$action = base_url('admin/blog');
	endif;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Blog posts    
</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Blog</a></li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">User List</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<form action="<?php echo $action; ?>" method="post">
        		<input type="text" name="title" class="form-control" placeholder="Post Title" value="<?php if(isset($ptitle)){ echo $ptitle; } ?>" required/>
        		<br />
        		<textarea name="content" id="area2" class="form-control" style="min-height:230px;max-width:100%;"><?php if(isset($pcontent)){ echo $pcontent; } ?></textarea>
        		<br />
        		<input type="submit" name="submitPost" value="Register" class="btn btn-primary" />
        	</form>
        	<div class="clearifx"></div><br /><hr />
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
				<th>ID</th>
				<th>Title</th>
				<th>Operation</th>
			  </tr>
            </thead>
            <tbody>
				<?php foreach ($posts as $p):?>
					<tr class="odd gradeX">
			            <td><?php echo $p['id']; ?></td>
			            <td><?php echo $p['title']; ?></td>
			            <td>
			            	<a href="<?php echo base_url('admin/blog/edit/'.$p['id']); ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
			            	<?php if($p['active']==1): ?>
			            		<a href="<?php echo base_url('admin/blog/delete/'.$p['id']); ?>" class="btn btn-danger"><i class="fa fa-ban"></i></a>
			            	<?php else: ?>
				            	<a href="<?php echo base_url('admin/blog/active/'.$p['id']); ?>" class="btn btn-success"><i class="fa fa-check"></i></a>
				            <?php endif; ?>
			            </td>
					</tr>
				<?php endforeach;?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

