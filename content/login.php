<div class="container">

   <h2 class="form-signin-heading"><center>Night Sky Monitoring</center></h2>
  <form class="form-signin" action="index.php?p=login" method="post">
    <label class="sr-only">Username</label>
    <input type="text" class="form-control" placeholder="Username" name="username" required>
    <label class="sr-only">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password" required>
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $Verify = new Verify($DB);
          $Verify->ValidateLogin($_POST['username'],$_POST['password']);
          if ($Verify->getLastError() == "") {
            $_SESSION['logged_in'] = 1;
            $_SESSION['user_id'] = $Verify->getUserID();
            header('Location: index.php?p=main');
          } else {

          }

        }

       ?>
    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
  </form>
  <center><a href="index.php?p=register">Register</a></center>

</div>