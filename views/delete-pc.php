<?php 
require_once '../controllers/pcController.php';

if(isset($_GET['id'])){
    $pcId  = $_GET['id'];
}
$pc = new pcController;
$pc->delete($pcId);

?>