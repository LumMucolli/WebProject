<?php 
require_once '../controllers/mobileController.php';
if(isset($_GET['id'])){
    $mobileId = $_GET['id'];
}

$mobile = new mobileController;
$currentmobile = $mobile->edit($mobileId);

if(isset($_POST['submit'])){
    $mobile->update($_POST, $mobileId);
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
    <input type="file" name="image" value="<?php echo  $currentmobile['mobile_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo  $currentmobile['mobile_title']; ?>">
    <br>
    Price:
    <input type="text" name="price" value="<?php echo  $currentmobile['mobile_price'];?> ">
    <br>
    <input type="submit" name="submit" value="Update" class="submit">
</form>
</div>