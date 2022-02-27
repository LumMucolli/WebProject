<?php
require_once '../controllers/menuController.php';
?>
<style>
*{
    font-family: sans-serif;
}

.content-table{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 60%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left: 420px;
    margin-top: -40%;
}

.content-table thead tr{
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td{
    padding: 12px 15px;
}

.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>

<?php 
    include '../html/dashboardHeader.php';
?>
        <div>
            <table class="content-table">
                <thead>
                    <tr>
                    <th>Menu image</th>
                    <th>Menu title</th>
                    <th>Menu price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $m = new menuController;
                $allMenu = $m->readData();
                foreach($allMenu as $menu): ?>
                    <tr>
                        <td><?php echo $menu['menu_image']; ?></td>
                        <td><?php echo $menu['menu_title']; ?></td>
                        <td><?php echo $menu['menu_price']; ?></td>
                        <td><a href="edit-menu.php?id=<?php echo $menu['Id'];?>">Edit</a></td>;
                        <td><a href="delete-menu.php?id=<?php echo $menu['Id'];?>">Delete</a></td>;
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>