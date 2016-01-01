<!DOCTYPE html>
<html>
  <?php include 'theme/head.php'; ?>
  <body class="hold-transition login-page">
    
    <?php
      if(isset($page)){
          include 'inc/'.$page;
        }else{
          include 'inc/error404.php';
        }
    ?>

    <?php include 'theme/footer-scripts.php'; ?>
    <script src="<?php echo base_url('atmp/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>

