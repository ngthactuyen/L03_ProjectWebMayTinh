<?php
$controller = @$_GET['controller'];
$action = @$_GET['action'];

// if (!$controller) {
// 	$controller = 'site';
// }

if ((!$controller && !$action) || ($controller == 'site' && !$action) ) {
	$controller = 'site';
	$action = 'home';
} elseif ((!$controller && $action) || ($controller == 'site' && $action) ) {
	$controller = 'site';
	$action = $action;
}

else {
	if ($controller != 'site') {
		if (!isset($_SESSION['id_nhanvien'])) {
			if ($controller == 'nhanvien' && $action == 'authenticate') {
				$controller = 'nhanvien';
				$action = 'authenticate';
			}else {
				$controller = 'nhanvien';
				$action = 'login';
			}
		} else {
			if (!$action) {
				$action = 'index';
			}
		}
	}	
}



// if (!$controller) {
// 	$controller = 'site';
// }

// $action = @$_GET['action'];
// if (!$action) {
// 	if ($controller == 'site') {
// 		$action = 'home';
// 	}
// 	else {
// 		$action = 'index';
// 	}
// }


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

	case 'site':
		$siteController = new SiteController();
		$siteController->$action();
		break;

	default:
		echo "Không có controller nào được gọi";
		break;
}


?>