<!DOCTYPE html>
<html lang="en">
<!-- Header -->
<?php 
    require_once ('main-header.php');
	
?>
  <body>
    <!-- Page Content -->
    <div id="login" class="container">
        <div class="row-fluid">
          <div class="login well well-small">
            <div class="center">
                <h1>Login</h1>
            </div>
            <form class="form-horizontal login-form" action="login2.php" method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3" style="padding-top:2%;">Username:</div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                        </div>
                    </div>      
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3" style="padding-top:2%;">Password:</div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                    </div>      
                </div>
                <br>
                <div class="form-group">        
                  <div class="col-sm-12">
                    <button type="submit" name = "login" class="btn btn-primary btn-block">LOGIN</button>
                  </div>
                </div>
            </form>
          </div><!--/.login-->
        </div><!--/.row-fluid-->
      </div><!--/.container-->
    <!-- /.container -->
  </body>
<!-- Footer -->
<?php 
    require_once ('main-footer.php');
?>
</html>
