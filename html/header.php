<?php  
echo 
'<link rel="stylesheet" href="../css/style.css?<?php echo time() ?>">
<header class="header-one">
        <ul id="header-ul">
            <li>
            +38344101203
            </li>
            <li id="one-list2">
                online@alpha-ks.com
            </li>
            <li class="lobtn">
                <a href = "./logout.php">LOGOUT</a> 
            </li>
            <button id="kycu-button">
              <a href="..//html/login.php">Kycu / Regjistrohu</a>  
            </button>
        </ul>
        <hr>
        <div class="search-div">
        <img src="../foto/logo.png" alt="logo" id="logo">
         <form>
         <input type="text" placeholder="Shkruaj produktin qe po kerkoni" id="text-search">
        </form>
        </div>

        <div class="categories-div">
                <ul id="categories-ul">   
                    <li><a href="./kompjutere.php">KOMPJUTERË</a></li>
                    <li><a href="./mobile.php">PAJISJE MOBILE</a></li>
                    <li><a href="./tv.php">TELEVIZORË</a></li>
                    <li><a href="./printers.php">PRINTERË</a></li>
                    <li><a href="">AKSESORË</a></li>
                </ul>
        </div>

        <div id="icons" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <ul class="mobile-menu">
                <li><a href="./loptop.html">KOMPJUTERË</a></li>
                <li><a href="">PAJISJE MOBILE</a></li>
                <li><a href="./televizore.html">TELEVIZORË</a></li>
                <li><a href="">PRINTERË</a></li>
                <li><a href="">AKSESORË</a></li>
            </ul>
        </div>
    </header>'
    ?>
