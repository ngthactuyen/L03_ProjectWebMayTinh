<?php
session_start();
require_once 'functions.php';

require_once 'models/Laptop.php';
require_once 'models/LaptopSql.php';
require_once 'controllers/LaptopController.php';

require_once 'models/HangSX.php';
require_once 'models/HangSXSql.php';
require_once 'controllers/HangSXController.php';

require_once 'models/Camera.php';
require_once 'models/CameraSql.php';
require_once 'controllers/CameraController.php';

require_once 'models/NhanVien.php';
require_once 'models/NhanVienSql.php';
require_once 'controllers/NhanVienController.php';

// require_once 'models/NhapHang.php';
// require_once 'models/NhapHangSql.php';
// require_once 'controllers/NhapHangController.php';

// require 'views/admin/layout/layout-demo.view.php';
require_once 'routes.php';

?>