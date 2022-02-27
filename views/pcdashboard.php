<?php
require_once '../controllers/pcController.php';
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
                    <th>pc image</th>
                    <th>pc title</th>
                    <th>pc price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $m = new pcController;
                $allpc = $m->readData();
                foreach($allpc as $pc): ?>
                    <tr>
                        <td><?php echo $pc['pc_image']; ?></td>
                        <td><?php echo $pc['pc_title']; ?></td>
                        <td><?php echo $pc['pc_price']; ?></td>
                        <td><a href="edit-pc.php?id=<?php echo $pc['Id'];?>">Edit</a></td>;
                        <td><a href="delete-pc.php?id=<?php echo $pc['Id'];?>">Delete</a></td>;
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>