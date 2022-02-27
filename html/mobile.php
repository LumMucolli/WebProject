<?php
    include './header.php';
    require_once '../controllers/mobileController.php';
?>

    <link rel="stylesheet" href="../css/mobile.css?v=<?php echo time(); ?>">

  
   <div class="firstphones">    
   <?php
   $products = new mobileController;
   $all = $products->readData();
   for($i = 0; $i < count($all); $i++){
       echo
           '<div class="phoneinfo">
              <a> <img src="' .$all[$i]['mobile_image'] .'">
               <h4>' .$all[$i]['mobile_title'] .'<h4>
               <h3>' .$all[$i]['mobile_price']. '<h3>
           </div></a>';    
   }
   ?>
   </div>

<?php 
include './footer.php';
?> 