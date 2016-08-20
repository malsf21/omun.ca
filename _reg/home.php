---
layout: account
title: Home
---
<div class="container">
  <?php if (isset($_GET['action'])){
    if ($_GET['action'] == "updatedDelegates"){
      echo '<div class="alert alert-success" role="alert">Delegates have been successfully updated.</div>';
    }
  }
  ?>
  <div class="jumbotron">
    <h3>Welcome <?php echo $_SESSION["info"]["first_name"] ?> to your Control Panel</h3>
    <p class="lead">Here, you can control your OMUN.ca account. For now, all you can do is specify how many delegates you'll be sending.</p>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="well">
        <form action="update_delegates.php" method="post">
          <div class="form-group">
            <label for="delegates">Registered Delegates</label>
            <input type="number" id="delegates" name="delegates" class="form-control" placeholder="<?php if ($_SESSION["info"]["delegates"]){echo $_SESSION["info"]["delegates"];} else{ echo "0";}?>" required="">
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </form>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="well">
        <h3>More coming soon!</h3>
      </div>
    </div>
  </div>
</div>
