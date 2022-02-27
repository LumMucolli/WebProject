<?php 
require_once '../controllers/tvController.php';

if(isset($_GET['id'])){
    $tvId  = $_GET['id'];
}
$tv = new tvController;
$tv->delete($tvId);

?>