<?php
    require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="..//css/style.css">
    <title>regjistrohu</title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){
        $role = $_POST['role'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];        
        
        $sql = "INSERT INTO users(role, username, password, name) values (?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$role, $username, $password, $name]);
        if($result){
            echo "Registred!";
        }
        else{
            echo "Not inserted";
        }
    }
?>
    <div class="div-one">
        <header class="header-one">
            <ul id="header-ul">
                <li>
                +38344101203
                </li>
                <li id="one-list2">
                    online@alpha-ks.com
                </li>
                <button id="kycu-button">
                    <a href="..//html/login.html">Kycu / Regjistrohu</a>  
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
                    <li><a href="./loptop.html">KOMPJUTERË</a></li>
                    <li><a href="./mobile.html">PAJISJE MOBILE</a></li>
                    <li><a href="./tv.html">TELEVIZORË</a></li>
                    <li><a href="">PRINTERË</a></li>
                    <li><a href="">AKSESORË</a></li>
                </ul>
            </div>
        </header>

        <main>
            <div id="logindiv">

            <div class="kyqu2">
                <form action="regjistrohu.php" method = "post">
                <h4 id="kycu4">Formular për regjistrim</h4>

                <label for="username"></label>
                <input type="text" placeholder="username" class="labels2" id="username" name="username">

                <label for="Password"></label>
                <input type="password" placeholder="Password" class="labels2" id="password" name="password">

                <label for="Password"></label>
                <input type="password" placeholder="Konfirmo password" class="labels2" id="confirmpw" name="password2">

                <label for="emri"></label>
                <input type="text" placeholder="Emri" class="labels2" id="name" name="name">


                <select class="selectdiv"
		          name="role" 
		          aria-label="Default select example">
                <option selected value="user">User</option>
                <option value="admin">Admin</option>
                </select>

                <button class="submit22" onclick="regex()" value="Register" type="submit" name = "submit">Regjistrohu</button>
                <script src="..//js/main.js"></script>
                </form>
            </div>
        </div>
        </main>

        <footer id="footerline">
            <hr>
            <div class="brands">
                <h4 class="brands-h4">Brendet tona:</h4>
                <img src="../foto/lenovo.png" alt="lenovo" class="brands-logo">
                <img src="../foto/acer.png" alt="acer" class="brands-logo">
                <img src="../foto/lg.png" alt="lg" class="brands-logo">
                <img src="../foto/dell.png" alt="dell" class="brands-logo">
                <img src="../foto/iphone.png" alt="iphone" class="brands-logo">
                <img src="../foto/samsung.png" alt="samsung" class="brands-logo">
                <img src="../foto/hp.png" alt="hp" class="brands-logo">
                <img src="../foto/huawei.png" alt="huawei" class="brands-logo">
            </div>
            <hr>
              <div class="footer-one">
                <div class="footer-two">
                <h3>KONTAKTI</h3>
                <hr>
                <ul class="footer-li">
                    <li class="footer-li1">
                        <span>Adresa:</span>
                        "Emshir, rr. Sylejman Vuciterrna p.n. <br>
                         10000 Prishtine, Kosove"
                    </li>
                    <li class="footer-li1">
                        <span>Tel/Viber:</span>
                        "+38344101202"
                    </li>
                    <li class="footer-li1">
                        <span>Email:</span>
                        "online@alpha-ks.com"
                    </li>
                </ul>
              </div>
    
              <div class="footer-three">
                <h3>LLOGARIA IME</h3>
                <hr>
                <ul class="footer-li2">
                    <li class="footer-li2">
                        Llogaria ime
                    </li>
                    <li class="footer-li2">
                        Porosite
                    </li>
                </ul>
              </div>
    
              <div class="footer-four">
                <h3>INFORMACIONE</h3>
                <hr>
                <ul class="footer-li4">
                    <li class="footer-li4">
                        Dyqanet tona
                    </li>
                    <li class="footer-li4">
                        Kushtet e dergimit
                    </li>
                </ul>
              </div>
            </div>
          </footer>
    </div>
</body>
</html>