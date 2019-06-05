<?php
$controller = @$_GET['controller'];
if (!$controller) {
	$controller = 'site';
}

$action = @$_GET['action'];
if (!$action) {
	if ($controller == 'site') {
		$action = 'trangchu';
	}
	else {
		$action = 'index';
	}
}

// echo "<pre>";
// var_dump($controller, $action);
// die();

switch ($controller) {
	case 'hangsx':
		$hangsxController = new HangSXController();
		$hangsxController->$action();
		break;

	case 'laptop':
		$laptopController = new LaptopController();
		$laptopController->$action();
		break;
	
	case 'camera':
		$cameraController = new CameraController();
		$cameraController->$action();
		break;

	case 'nhanvien':
		$nhanvienController = new NhanVienController();
		$nhanvienController->$action();
		break;

	default:
		echo "Không có controller nào được gọi";
		break;
}


?>