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
		$temp = getOneData("select * from tbl_laptop where url_laptop like '$url_laptop%' ");
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

		// $hangsx_id = @$_GET['hangsx_id'];
		// echo "hangsx_id<br>";
		// var_dump($hangsx_id);
		// echo "<br><br>";

		$prefixSql = "select * from tbl_laptop ";
		$suffixSql = " order by rand()";
		if (count($_GET) == 1 && $_GET['action'] == 'getAllLaptop') {
			$sql = $prefixSql.$suffixSql;
			// var_dump($sql);
			// echo "<br><br><br>";

		} elseif (count($_GET) > 1 && $_GET['action'] == 'getAllLaptop') {
			$prefixSql = "select * from tbl_laptop where ";
			if (isset($_GET['hangsx_id'])) {
				# code...
			}
		}


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
		$temp = getOneData("select * from tbl_camera where url_camera like '$url_camera%' ");
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



}


?>