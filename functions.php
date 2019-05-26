<?php
function connect(){
	$connection = mysqli_connect(
		'localhost',
		'root',
		'',
		'L03_ProjectWebMAYTINH'
	);
	mysqli_set_charset($connection, 'utf8');
	return $connection;
}

function execute($sql){
	return mysqli_query(connect(), $sql);
}

function getAllData($sql){
	$resultSet = execute($sql);
	$result = [];
	$row = mysqli_fetch_assoc($resultSet);
	while ($row != null) {
		$result[] = $row;
		$row = mysqli_fetch_assoc($resultSet);
	}
	return $result;
}

function getOneData($sql){
	$resultSet = execute($sql);
	return mysqli_fetch_assoc($resultSet);
}

function dd($data = ''){
	echo "<pre>";
	var_dump($data);
	die();
}

function viewAdminLayout($viewName){
	require "views/admin/layout/$viewName.view.php";
}

function viewAdmin($viewName, $data = ''){
	if ($data) {
		extract($data);
		require "views/admin/$viewName.view.php";
	} else {
		require "views/admin/$viewName.view.php";
	}	
}

function redirect($controller, $action = ''){
	if (!$action) {
		header("location:?controller=$controller");
	}else{
		header("location:?controller=$controller&action=$action");	
	}
}

function setErrorMessage($message){
	$_SESSION['error_message'] = $message;
}

function setSuccessMessage($message){
	$_SESSION['success_message'] = $message;
}

?>

