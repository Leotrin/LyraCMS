<!DOCTYPE html>
<html>
  <?php include 'theme/head.php'; ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php 
        include 'theme/header.php'; 
        include 'theme/menu.php'; 

        if(isset($page)){
          include 'inc/'.$page;
        }else{
          include 'inc/error404.php';
        }

        include 'theme/footer.php'; 
      ?>
    </div><!-- ./wrapper -->

    <?php include 'theme/footer-scripts.php'; ?>
  </body>
</html>
