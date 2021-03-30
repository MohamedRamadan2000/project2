<?php include('server.php'); ?>
<!DOCTYpE html>
<html>
<head>
<title>User registration system using PHP and Mysql</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="header">
       <h2>Register</h2>
   </div> 
   <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
          <lable>Username</lable>
          <input type="text" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
          <lable>Email</lable>
          <input type="text" name="email" value="<?php echo $email; ?>" >
      </div>
      <div class="input-group">
          <lable>Password</lable>
          <input type="password" name="password_1">
      </div>
      <div class="input-group">
          <lable>Confirm Password</lable>
          <input type="password" name="password_2">
      </div>
      <div class="input-group">
          <button type="submit" name="register" class="btn">Register</button>
      </div>
      
      <p>
         Already a member? <a href="login.php">Sign in</a>     
      </p>
   
   </form>
</body>
</html>