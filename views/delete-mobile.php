<?php 
require_once '../controllers/mobileController.php';

if(isset($_GET['id'])){
    $mobileId  = $_GET['id'];
}
$mobile = new mobileController;
$mobile->delete($mobileId);

?>