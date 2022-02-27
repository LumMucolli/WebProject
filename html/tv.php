<?php
    include './header.php';
    require_once '../controllers/tvController.php';
?>

    <link rel="stylesheet" href="../css/mobile.css?v=<?php echo time(); ?>">

  
   <div class="firstphones">    
   <?php
   $products = new tvController;
   $all = $products->readData();
   for($i = 0; $i < count($all); $i++){
       echo
           '<div class="phoneinfo">
              <a> <img src="' .$all[$i]['tv_image'] .'">
               <h4>' .$all[$i]['tv_title'] .'<h4>
               <h3>' .$all[$i]['tv_price']. '<h3>
           </div></a>';    
   }
   ?>
   </div>

<?php 
include './footer.php';
?> 