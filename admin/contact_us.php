<?php 
    include_once "include/admin_header.php";

    // Navigation
    include_once "include/admin_nav.php";

    include_once 'function/pagination.php';

    $commons = new Common;

?>

<div class="right_col" role="main">
  <?php
  
    if(isset($result)){
      echo "Mail sent Success";
    }
  
  ?>
    <h4 class="text-center">Contact Us</h4>
    <form action="contact-act.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nameInput">Name: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="nameInput" name="name" required="required" class="form-control">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="emailInput">Email: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="email" id="emailInput" name="email" required="required" class="form-control">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="phoneInput">Phone: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="phoneInput" name="phone" required="required" class="form-control">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="subjectInput">Subject: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="subjectInput" name="subject" required="required" class="form-control">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="messageInput">Message: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <textarea type="text" class="form-control" id="messageInput" name="message"></textarea>
        </div>
      </div>
      <div class="item form-group mt-3">
        <div class="col-md-6 col-sm-6 offset-md-3">
          <button type="submit" class="btn btn-primary btn-sm" name="conmail">Submit</button>
        </div>
      </div>
    </form>
</div>



<?php include 'footer.php'?>