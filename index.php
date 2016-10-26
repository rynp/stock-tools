<?php
echo $action = isset($_POST['submit'])? $_POST['submit']:'';
echo "<pre>",print_r($_POST);
switch($action){
    case('"Update List'):
    default:
		require ('updateForm.php');
    break;
}
?>
