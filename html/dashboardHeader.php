<?php
    echo'
    <link rel="stylesheet" href="../css/dashboard.css?<?php echo time();?>">
    <div class="dashboard">
        <header>
            <h1>Dashboard</h1>
            <div class="pc">
                <hr>
                <table>
                    <tr>
                        <h3>Kompjuter</h3>
                    </tr>
                    <tr>
                        <a href="../views/create-pc.php"><h4>Shto kompjuter</h4></a>
                        <a href="../views/pcdashboard.php"><h4>Edito kompjuter</h4></a>
                        <a href="../views/delete-pc.php"><h4>Fshij kompjuter</h4></a>
                    </tr>
                </table>
                <hr>
            </div>

            <div class="mobile">
                <hr>
                <table>
                    <tr>
                        <h3>Telefon</h3>
                    </tr>
                    <tr>
                        <a href="../views/create-mobile.php"><h4>Shto telefon</h4></a>
                        <a href="../views/mobiledashboard.php"><h4>Edito telefon</h4></a>
                        <a href="../views/delete-mobile.php"><h4>Fshij telefon</h4></a>
                    </tr>
                </table>
                <hr>
            </div>

            <div class="tv">
                <hr>
                <table>
                    <tr>
                        <h3>TV</h3>
                    </tr>
                    <tr>
                        <a href="../views/create-tv.php"><h4>Shto TV</h4></a>
                        <a href="../views/tvdashboard.php"><h4>Edito TV</h4></a>
                        <a href="../views/delete-tv.php"><h4>Fshij TV</h4></a>
                    </tr>
                </table>
                <hr>
            </div>

            <div class="printer">
                <hr>
                <table>
                    <tr>
                        <h3>Printer</h3>
                    </tr>
                    <tr>
                        <a href="../views/create-menu.php"><h4>Shto printer</h4></a>
                       <a href="../views/menudashboard.php"> <h4>Edito printer</h4></a>
                       <a href="../views/delete-menu.php"><h4>Fshij printer</h4></a>
                    </tr>
                </table>
                <hr>
            </div>
        </header>
    </div>'
?>    