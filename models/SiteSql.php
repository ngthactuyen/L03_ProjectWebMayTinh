<?php
/**
 * 
 */
class SiteSql
{	
	public $hangsxSql;
	public $laptopSql;
	public $cameraSql;

	function __construct()
	{
		$this->hangsxSql = new HangSXSql();
		$this->laptopSql = new LaptopSql();
		$this->cameraSql = new CameraSql();
	}

	public function getOneLaptopByUrl($url_laptop){
		$temp = getOneData("select * from tbl_laptop where url_laptop like '$url_laptop' ");
		return $laptop = new Laptop($temp);
	}

	function getAllLaptopHome($soluong){
		$sql = "select * from tbl_laptop order by rand() limit $soluong";
		$laptopList = getAllData($sql);
		// dd($laptopList);
		$laptopObject = [];
		foreach ($laptopList as $laptop) {
			$laptopObject[] = new Laptop($laptop);
		}
		// dd($laptopObject);
		return $laptopObject;
	}

	function getRemarkableLaptop($soluong){
		$sql = "select * from tbl_laptop where gia_laptop > 15000000 order by rand() limit $soluong";
		$laptopList = getAllData($sql);
		// dd($laptopList);
		$laptopObject = [];
		foreach ($laptopList as $laptop) {
			$laptopObject[] = new Laptop($laptop);
		}
		// dd($laptopObject);
		return $laptopObject;
	}

	function getLaptopWithHangSX($id_laptop, $hangsx_id, $soluong){
		$sql = "select * from tbl_laptop where hangsx_id = $hangsx_id and id_laptop not like '%$id_laptop%' order by rand() limit $soluong";
		$laptopList = getAllData($sql);
		// dd($laptopList);
		$laptopObject = [];
		foreach ($laptopList as $laptop) {
			$laptopObject[] = new Laptop($laptop);
		}
		// dd($laptopObject);
		return $laptopObject;
	}

	function getAllLaptop($data = ''){
		// echo "GET<br>";
		// var_dump(count($_GET));
		// var_dump($_GET);
		// echo "<br><br>";
		

		$prefixSql = "select * from tbl_laptop ";
		$suffixSql = " order by rand()";
		if ((count($_GET) == 1 && $_GET['action'] == 'getAllLaptop') || (count($_GET) == 2 && $_GET['action'] == 'getAllLaptop' && @$_GET['controller'] == 'site')) {
			$sql = $prefixSql.$suffixSql;

		} elseif ((count($_GET) > 1 && $_GET['action'] == 'getAllLaptop') || (count($_GET) > 1 && $_GET['action'] == 'getAllLaptop' && @$_GET['controller'] == 'site')) 
		{
			$infixSql = " where ";

			//hangsx_id
			if (isset($_GET['hangsx_id'])) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['hangsx_id']); $i++) { 
					if ($i == count($_GET['hangsx_id']) - 1) {
						$infixSql .= "hangsx_id = ".$_GET['hangsx_id'][$i]." ";
					} else {
						$infixSql .= "hangsx_id = ".$_GET['hangsx_id'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}

			//gia_laptop
			if (isset($_GET['gia_laptop']) && !isset($_GET['hangsx_id'])) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['gia_laptop']); $i++) { 
					if ($i == count($_GET['gia_laptop']) - 1) {
						$infixSql .= "gia_laptop ".$_GET['gia_laptop'][$i]." ";
					} else {
						$infixSql .= "gia_laptop ".$_GET['gia_laptop'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['gia_laptop']) && isset($_GET['hangsx_id'])) {
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['gia_laptop']); $i++) { 
					if ($i == count($_GET['gia_laptop']) - 1) {
						$infixSql .= "gia_laptop ".$_GET['gia_laptop'][$i]." ";
					} else {
						$infixSql .= "gia_laptop ".$_GET['gia_laptop'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}

			//nhucau
			if (isset($_GET['nhucau']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_laptop']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['nhucau']); $i++) { 
					if ($i == count($_GET['nhucau']) - 1) {
						$infixSql .= "nhucau = ".$_GET['nhucau'][$i]." ";
					} else {
						$infixSql .= "nhucau = ".$_GET['nhucau'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['nhucau']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_laptop']))) {
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['nhucau']); $i++) { 
					if ($i == count($_GET['nhucau']) - 1) {
						$infixSql .= "nhucau = ".$_GET['nhucau'][$i]." ";
					} else {
						$infixSql .= "nhucau = ".$_GET['nhucau'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			
			//cpu
			if (isset($_GET['cpu']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_laptop']) && !isset($_GET['nhucau']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['cpu']); $i++) { 
					if ($i == count($_GET['cpu']) - 1) {
						$infixSql .= "cpu like '".$_GET['cpu'][$i]."%' ";
					} else {
						$infixSql .= "cpu like '".$_GET['cpu'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['cpu']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_laptop']) || isset($_GET['nhucau']) )) {
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['cpu']); $i++) { 
					if ($i == count($_GET['cpu']) - 1) {
						$infixSql .= "cpu like '".$_GET['cpu'][$i]."%' ";
					} else {
						$infixSql .= "cpu like '".$_GET['cpu'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}

			//ram
			if (isset($_GET['ram']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_laptop']) && !isset($_GET['nhucau']) && !isset($_GET['cpu']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['ram']); $i++) { 
					if ($i == count($_GET['ram']) - 1) {
						$infixSql .= "ram like '".$_GET['ram'][$i]."%' ";
					} else {
						$infixSql .= "ram like '".$_GET['ram'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['ram']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_laptop']) || isset($_GET['nhucau']) || isset($_GET['cpu']) )) { 
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['ram']); $i++) { 
					if ($i == count($_GET['ram']) - 1) {
						$infixSql .= "ram like '".$_GET['ram'][$i]."%' ";
					} else {
						$infixSql .= "ram like '".$_GET['ram'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}

			// ocung
			if (isset($_GET['ocung']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_laptop']) && !isset($_GET['nhucau']) && !isset($_GET['cpu']) && !isset($_GET['ram']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['ocung']); $i++) { 
					if ($i == count($_GET['ocung']) - 1) {
						$infixSql .= "ocung like '".$_GET['ocung'][$i]."%' ";
					} else {
						$infixSql .= "ocung like '".$_GET['ocung'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['ocung']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_laptop']) || isset($_GET['nhucau']) || isset($_GET['cpu']) || isset($_GET['ram']) )) { 
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['ocung']); $i++) { 
					if ($i == count($_GET['ocung']) - 1) {
						$infixSql .= "ocung like '".$_GET['ocung'][$i]."%' ";
					} else {
						$infixSql .= "ocung like '".$_GET['ocung'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}

			// vga
			if (isset($_GET['vga']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_laptop']) && !isset($_GET['nhucau']) && !isset($_GET['cpu']) && !isset($_GET['ram']) && !isset($_GET['ocung']) ))
			{
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['vga']); $i++) { 
					if ($i == count($_GET['vga']) - 1) {
						$infixSql .= "vga like '%".$_GET['vga'][$i]."%' ";
					} else {
						$infixSql .= "vga like '%".$_GET['vga'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['vga']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_laptop']) || isset($_GET['nhucau']) || isset($_GET['cpu']) || isset($_GET['ram']) || isset($_GET['ocung']) )) 
			{ 
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['vga']); $i++) { 
					if ($i == count($_GET['vga']) - 1) {
						$infixSql .= "vga like '%".$_GET['vga'][$i]."%' ";
					} else {
						$infixSql .= "vga like '%".$_GET['vga'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}

			// manhinh
			if (isset($_GET['manhinh']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_laptop']) && !isset($_GET['nhucau']) && !isset($_GET['cpu']) && !isset($_GET['ram']) && !isset($_GET['ocung']) && !isset($_GET['vga']) ))
			{
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['manhinh']); $i++) { 
					if ($i == count($_GET['manhinh']) - 1) {
						$infixSql .= "manhinh like '".$_GET['manhinh'][$i]."%' ";
					} else {
						$infixSql .= "manhinh like '".$_GET['manhinh'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['manhinh']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_laptop']) || isset($_GET['nhucau']) || isset($_GET['cpu']) || isset($_GET['ram']) || isset($_GET['ocung']) || isset($_GET['vga']) )) 
			{ 
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['manhinh']); $i++) { 
					if ($i == count($_GET['manhinh']) - 1) {
						$infixSql .= "manhinh like '".$_GET['manhinh'][$i]."%' ";
					} else {
						$infixSql .= "manhinh like '".$_GET['manhinh'][$i]."%' or ";
					}
				}
				$infixSql .= " ) ";
			}





			$sql = $prefixSql.$infixSql.$suffixSql;
		}
		// var_dump($sql);
		// echo "<br><br><br>";


		$laptopList = getAllData($sql);
		// dd($laptopList);
		$laptopObject = [];
		foreach ($laptopList as $laptop) {
			$laptopObject[] = new Laptop($laptop);
		}
		// dd($laptopObject);
		return $laptopObject;
	}


	public function getOneCameraByUrl($url_camera){
		$temp = getOneData("select * from tbl_camera where url_camera like '$url_camera' ");
		return $camera = new Camera($temp);
	}

	function getAllCameraHome($soluong){
		$sql = "select * from tbl_camera order by rand() limit $soluong";
		$cameraList = getAllData($sql);
		// dd($cameraList);
		$cameraObject = [];
		foreach ($cameraList as $camera) {
			$cameraObject[] = new Camera($camera);
		}
		// dd($cameraObject);
		return $cameraObject;
	}

	function getRemarkableCamera($soluong){
		$sql = "select * from tbl_camera where gia_camera > 1000000 order by rand() limit $soluong";
		$cameraList = getAllData($sql);
		// dd($cameraList);
		$cameraObject = [];
		foreach ($cameraList as $camera) {
			$cameraObject[] = new Camera($camera);
		}
		// dd($cameraObject);
		return $cameraObject;
	}	

	function getCameraWithHangSX($id_camera, $hangsx_id, $soluong){
		$sql = "select * from tbl_camera where hangsx_id = $hangsx_id and id_camera not like '%$id_camera%' order by rand() limit $soluong";
		$cameraList = getAllData($sql);
		// dd($cameraList);
		$cameraObject = [];
		foreach ($cameraList as $camera) {
			$cameraObject[] = new Camera($camera);
		}
		// dd($cameraObject);
		return $cameraObject;
	}

	function getAllCamera($data = ''){
			// echo "GET<br>";
			// var_dump(count($_GET));
			// var_dump($_GET);
			// echo "<br><br>";
		

		$prefixSql = "select * from tbl_camera ";
		$suffixSql = " order by rand()";
		if ((count($_GET) == 1 && $_GET['action'] == 'getAllCamera') || (count($_GET) == 2 && $_GET['action'] == 'getAllCamera' && @$_GET['controller'] == 'site')) {
			$sql = $prefixSql.$suffixSql;

		} elseif ((count($_GET) > 1 && $_GET['action'] == 'getAllCamera') || (count($_GET) > 1 && $_GET['action'] == 'getAllCamera' && @$_GET['controller'] == 'site')) 
		{
			$infixSql = " where ";

			//hangsx_id
			if (isset($_GET['hangsx_id'])) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['hangsx_id']); $i++) { 
					if ($i == count($_GET['hangsx_id']) - 1) {
						$infixSql .= "hangsx_id = ".$_GET['hangsx_id'][$i]." ";
					} else {
						$infixSql .= "hangsx_id = ".$_GET['hangsx_id'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}

			//gia_camera
			if (isset($_GET['gia_camera']) && !isset($_GET['hangsx_id'])) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['gia_camera']); $i++) { 
					if ($i == count($_GET['gia_camera']) - 1) {
						$infixSql .= "gia_camera ".$_GET['gia_camera'][$i]." ";
					} else {
						$infixSql .= "gia_camera ".$_GET['gia_camera'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['gia_camera']) && isset($_GET['hangsx_id'])) {
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['gia_camera']); $i++) { 
					if ($i == count($_GET['gia_camera']) - 1) {
						$infixSql .= "gia_camera ".$_GET['gia_camera'][$i]." ";
					} else {
						$infixSql .= "gia_camera ".$_GET['gia_camera'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}

			//dophangiai
			if (isset($_GET['dophangiai']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_camera']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['dophangiai']); $i++) { 
					if ($i == count($_GET['dophangiai']) - 1) {
						$infixSql .= "dophangiai ".$_GET['dophangiai'][$i]." ";
					} else {
						$infixSql .= "dophangiai ".$_GET['dophangiai'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['dophangiai']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_camera']))) {
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['dophangiai']); $i++) { 
					if ($i == count($_GET['dophangiai']) - 1) {
						$infixSql .= "dophangiai ".$_GET['dophangiai'][$i]." ";
					} else {
						$infixSql .= "dophangiai ".$_GET['dophangiai'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			
			//ongkinh
			if (isset($_GET['ongkinh']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_camera']) && !isset($_GET['dophangiai']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['ongkinh']); $i++) { 
					if ($i == count($_GET['ongkinh']) - 1) {
						$infixSql .= "ongkinh ".$_GET['ongkinh'][$i]." ";
					} else {
						$infixSql .= "ongkinh ".$_GET['ongkinh'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['ongkinh']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_camera']) || isset($_GET['dophangiai']) )) {
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['ongkinh']); $i++) { 
					if ($i == count($_GET['ongkinh']) - 1) {
						$infixSql .= "ongkinh ".$_GET['ongkinh'][$i]." ";
					} else {
						$infixSql .= "ongkinh ".$_GET['ongkinh'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}

			//bankinhhongngoai
			if (isset($_GET['bankinhhongngoai']) && (!isset($_GET['hangsx_id']) && !isset($_GET['gia_camera']) && !isset($_GET['dophangiai']) && !isset($_GET['ongkinh']) )) {
				$infixSql .= " ( ";
				for ($i = 0; $i < count($_GET['bankinhhongngoai']); $i++) { 
					if ($i == count($_GET['bankinhhongngoai']) - 1) {
						$infixSql .= "bankinhhongngoai ".$_GET['bankinhhongngoai'][$i]." ";
					} else {
						$infixSql .= "bankinhhongngoai ".$_GET['bankinhhongngoai'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}
			if (isset($_GET['bankinhhongngoai']) && (isset($_GET['hangsx_id']) || isset($_GET['gia_camera']) || isset($_GET['dophangiai']) || isset($_GET['ongkinh']) )) { 
				$infixSql .= " and (";
				for ($i = 0; $i < count($_GET['bankinhhongngoai']); $i++) { 
					if ($i == count($_GET['bankinhhongngoai']) - 1) {
						$infixSql .= "bankinhhongngoai ".$_GET['bankinhhongngoai'][$i]." ";
					} else {
						$infixSql .= "bankinhhongngoai ".$_GET['bankinhhongngoai'][$i]." or ";
					}
				}
				$infixSql .= " ) ";
			}



			$sql = $prefixSql.$infixSql.$suffixSql;
		}
		// var_dump($sql);
		// echo "<br><br><br>";


		$cameraList = getAllData($sql);
		// dd($cameraList);
		$cameraObject = [];
		foreach ($cameraList as $camera) {
			$cameraObject[] = new Camera($camera);
		}
		// dd($cameraObject);
		return $cameraObject;
	}


}


?>