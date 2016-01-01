<div class="container clearfix">
  <div class="col-md-12">
    <div class="welcomeMessage">
      <h1>Contact us</h1>
      <p class="lead">
        Feel free and fill the form to contact us. 
      </p>
      <hr />
      <?php if(isset($messageSend)){ echo $messageSend; } ?>
      <div class="col-md-7">
        <form action="<?php echo base_url('contact'); ?>" method="post">
          <input type="text" name="fullname" class="form-control" placeholder="Full name *" required/>
          <br />
          <input type="email" name="email" class="form-control" placeholder="E-Mail *" required/>
          <br />
          <input type="text" name="subject" class="form-control" placeholder="Subject *" required/>
          <br />
          <textarea name="msg" class="form-control" placeholder="Message"></textarea>
          <br />
          <input type="submit" name="submitContact" value="Send" class="btn btn-primary pull-left" />
        </form>
        <div class="clearfix"></div>
        <br />
      </div>
      <div class="col-md-5" style="text-align:left;">
        <p><strong style="font-size:14pt;">Contact Details</strong></p>
        <br />
        <p><strong>Address</strong> : Brother Milladinov nr.1<p>
        <p><strong>City, Country</strong> : Struga 6330, Macedonia<p>
        <p><strong>Tel</strong> : 00389 71 588 956<p>
        <p><strong>E-Mail</strong> : leotrin@mangosoft.com.mk<p>
        <p><strong>Web</strong> : leotrin.piramidus.com<p>
      </div>
    </div>
  </div>
</div>