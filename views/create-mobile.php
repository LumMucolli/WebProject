<?php 
require_once '../controllers/mobileController.php';

$mobile = new mobileController;
if(isset($_POST['submit'])){
    $mobile->insert($_POST);
}
?>

<?php 
    include '../html/dashboardHeader.php';
?>

<link rel="stylesheet" href="../css/view.css?v=<?php echo time();?>">

<h2>SHTO TELEFON</h2>
<div class="a">
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Price:
        <input type="text" name="price">
        <br>
        <input type="submit" name="submit" class="submit" value="Save">
    </form>
</div>