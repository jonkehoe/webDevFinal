<?php include('registerLoad2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register2.php">
  	<?php include('errors.php'); ?>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="user" value="<?php echo $user; ?>">
  	</div>

    <div class="input-group">
  	  <label>FirstName</label>
  	  <input type="text" name="first_name" value="<?php echo $first_name; ?>">
  	</div>

    <div class="input-group">
  	  <label>Surname</label>
  	  <input type="text" name="surname" value="<?php echo $surname; ?>">
  	</div>

    <div class="input-group">
  	  <label>Mobile Number</label>
  	  <input type="text" name="mnum" value="<?php echo $mnum; ?>">
  	</div>

    <div class="input-group">
  	  <label>Telephone</label>
  	  <input type="text" name="tnum" value="<?php echo $tnum; ?>">
  	</div>

    <div class="input-group">
  	  <label>Address1</label>
  	  <input type="text" name="add1" value="<?php echo $add1; ?>">
  	</div>

    <div class="input-group">
  	  <label>Address2</label>
  	  <input type="text" name="add2" value="<?php echo $add2; ?>">
  	</div>

    <div class="input-group">
  	  <label>City</label>
  	  <input type="text" name="city" value="<?php echo $city; ?>">
  	</div>

    <div class="input-group">
  	  <label>Password</label>
  	  <input type="text" name="pass" value="<?php echo $pass; ?>">
  	</div>

    <div class="input-group">
  	  <label>Confirm Password</label>
  	  <input type="text" name="cpass" value="<?php echo $cpass; ?>">
  	</div>




  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>