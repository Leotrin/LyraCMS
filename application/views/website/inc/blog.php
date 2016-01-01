<div class="container clearfix">
  <div class="col-md-12">
    <div class="welcomeMessage">
      <h1>blog posts</h1>
      <hr />
      <?php foreach($posts as $p): ?>
        <div class="col-md-12" style="padding:10px;border:1px solid #ccc;border-radius:10px;margin:10px 0px 10px 0px;">
          <h3><?php echo $p['title']; ?></h3>
          <hr />
          <p><?php echo mb_convert_encoding($p['content'], "UTF-8"); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>