<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="php/check-login.php" method="post">
            <h1>LOGIN</h1>
            <div class="done">
		    <label for="username" 
		           class="form-label">User name</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
          <div class="dtwo">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
          <div class="dthree">
		    <label class="form-label">Select User Type:</label>
		  </div>
          <select class="selectdiv"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
		  </select>
          <div class="btndiv">
          <button type="submit" 
		          class="btn">LOGIN</button>
          </div>        
            <div class="dfour">
            <h4>Nuk keni llogari? / <a href="./regjistrohu.php">Regjistrohuni</a></h4>
            </div>    
        </form>
    </div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>