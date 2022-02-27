<?php
require_once '../controllers/tvController.php';
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
                    <th>tv image</th>
                    <th>tv title</th>
                    <th>tv price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $m = new tvController;
                $alltv = $m->readData();
                foreach($alltv as $tv): ?>
                    <tr>
                        <td><?php echo $tv['tv_image']; ?></td>
                        <td><?php echo $tv['tv_title']; ?></td>
                        <td><?php echo $tv['tv_price']; ?></td>
                        <td><a href="edit-tv.php?id=<?php echo $tv['Id'];?>">Edit</a></td>;
                        <td><a href="delete-tv.php?id=<?php echo $tv['Id'];?>">Delete</a></td>;
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>