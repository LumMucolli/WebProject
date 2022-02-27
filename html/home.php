<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


      	<?php if ($_SESSION['role'] == 'admin') {?>
			<?php include "../html/dashboardHeader.php"?>

      	<?php }else { ?>
			  <?php include "../html/index.php" ?>
			    	<?=$_SESSION['name']?>
      	<?php } ?>
<?php }else{
	header("Location: index.php");
} ?>