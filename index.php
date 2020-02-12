<!--header-->
<?php include('header.php'); ?>
<!--body-->
  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="favicon.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Admin sign in</h1>
      <label for="inputEmail" class="sr-only">ID</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="ID" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
            <input type="checkbox" onclick="remember_me()" value="remember-me"> Remember me
        </label>&nbsp;&nbsp;
          <a href="register.php" class="" style="text-decoration:none">New Register?</a>
        </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <!--footer-->
         <?php include('footer.php'); ?>
    </form>
 

