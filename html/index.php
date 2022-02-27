<!DOCTYPE html>
<html>
<head>
    <title>ecommerce</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="div-one">
        
    <?php
    include "./header.php";
    ?>


    <main>
        <div class="bannerdiv">
        <a href=""><img src="..//foto/banner.jpg" class="addbox"></a>
        </div>

        <div class="slider">
          <div class="slider-content">
             <a href="./kompjutere.php"> <img src="..//foto/pcslider.jpg" alt="slidephotos" class="sliderphotos"></a>
          </div>
          <div class="slider-content">
             <a href="./tv.php"> <img src="..//foto/slidertv.png" alt="slidephotos" class="sliderphotos"></a>
          </div>
          <div class="slider-content">
             <a href="./mobile.php"> <img src="..//foto/phoneslider1.jpg" alt="slidephotos" class="sliderphotos"></a>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
      </div>
      <script src="..//js/main.js"></script>

    </main>

    <?php 
        include './footer.php';
    ?> 
    
    </div>
</body>
</html>