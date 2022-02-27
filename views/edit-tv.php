<?php 
require_once '../controllers/tvController.php';
if(isset($_GET['id'])){
    $tvId = $_GET['id'];
}

$tv = new tvController;
$currenttv = $tv->edit($tvId);

if(isset($_POST['submit'])){
    $tv->update($_POST, $tvId);
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
    <input type="file" name="image" value="<?php echo  $currenttv['tv_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo  $currenttv['tv_title']; ?>">
    <br>
    Price:
    <input type="text" name="price" value="<?php echo  $currenttv['tv_price'];?> ">
    <br>
    <input type="submit" name="submit" value="Update" class="submit">
</form>
</div>