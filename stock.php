<?php
$action = isset($_GET['action'])? $_GET['action']:'';
switch($action){
    case('update_master_list'):
	require ('updateForm.php');
	require ('shortList.php');
    break;
    default:
    break;
}
?>
