<?php
include "../class/users.php";



if(isset($_GET['msg']))
{
	$obj->logout();
	$obj->url("quiz_oops");
}
	
	



?>