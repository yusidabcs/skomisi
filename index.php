<?php
session_start();
include_once './vendor/autoload.php';
if($_POST['add-agent'])
{

	$old = $_POST;
	$agent = new Agent;
	$agent->store();
}

if($_POST['edit-agent']){
	$old = $_POST;
	$agent = new Agent;
	$agent->update($_GET['id']);	
}

if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 'list-agent';
}

switch ($page) {
	case 'list-agent':
		$agents = new Agent;
		$agents = $agents->all();
		break;

	case 'edit-agent':
		$agent = new Agent;
		$agent = $agent->show($_GET['id']);
		break;

	case 'delete-agent':

		$agent = new Agent;
		$agent = $agent->delete($_GET['id']);
		break;

	default:
		break;
}

include_once './app/view/'.$page.'.php';
unset($_SESSION['message']);
unset($_SESSION['error']);
?>