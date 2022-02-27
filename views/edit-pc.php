<?php 
require_once '../controllers/pcController.php';
if(isset($_GET['id'])){
    $pcId = $_GET['id'];
}

$pc = new pcController;
$currentpc = $pc->edit($pcId);

if(isset($_POST['submit'])){
    $pc->update($_POST, $pcId);
}
?>

<?php 
    include '../html/dashboardHeader.php';
?>

<link rel="stylesheet" href="../css/view.css?v=<?php echo time();?>">

<h2>TABELA PER EDITIM</h2>
<div class="a">
<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo  $currentpc['pc_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo  $currentpc['pc_title']; ?>">
    <br>
    Price:
    <input type="text" name="price" value="<?php echo  $currentpc['pc_price'];?> ">
    <br>
    <input type="submit" name="submit" value="Update" class="submit">
</form>
</div>  