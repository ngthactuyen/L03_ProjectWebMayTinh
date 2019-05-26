<?php
session_start();
require_once 'functions.php';

require_once 'models/Laptop.php';
require_once 'models/LaptopSql.php';
require_once 'controllers/LaptopController.php';

require_once 'models/HangSX.php';
require_once 'models/HangSXSql.php';
require_once 'controllers/HangSXController.php';

// require 'views/admin/layout/layout.view.php';
require_once 'routes.php';

?>