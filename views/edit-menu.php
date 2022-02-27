<?php 
require_once '../controllers/menuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new menuController;
$currentMenu = $menu->edit($menuId);

if(isset($_POST['submit'])){
    $menu->update($_POST, $menuId);
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
    <input type="file" name="image" value="<?php echo  $currentMenu['menu_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo  $currentMenu['menu_title']; ?>">
    <br>
    Price:
    <input type="text" name="price" value="<?php echo  $currentMenu['menu_price'];?> ">
    <br>
    <input type="submit" name="submit" value="Update" class="submit">
</form>
</div>