<?php
class SiteController{
	protected $siteSql;
	
	function __construct()
	{
		$this->siteSql = new SiteSql();
	}

	function home()
	{
		// $laptopList = $this->siteSql->laptopSql->getAllLaptop();
		// $cameraList = $this->siteSql->cameraSql->getAllCamera();
		$hangsxLaptop = $this->siteSql->hangsxSql->getHangSXLaptop();
		$hangsxCamera = $this->siteSql->hangsxSql->getHangSXCamera();
		$laptopList = $this->siteSql->getAllLaptopHome(8);
		$cameraList = $this->siteSql->getAllCameraHome(8);
		$remarkableLaptopList = $this->siteSql->getRemarkableLaptop(2);
		$remarkableCameraList = $this->siteSql->getRemarkableCamera(2);



		viewSite('home', ['laptopList' => $laptopList, 'cameraList' => $cameraList, 'hangsxLaptop' => $hangsxLaptop, 'hangsxCamera' => $hangsxCamera, 'remarkableLaptopList' => $remarkableLaptopList, 'remarkableCameraList' => $remarkableCameraList]);
		
	}

	function getAllLaptop(){
		// dd($_GET);
		// dd($_POST);

		// echo "<pre>";
		// print_r($_GET);

		// echo "GET<br>";
		// var_dump(count($_GET));
		// var_dump($_GET);
		// echo "<br><br>";

		// $hangsx_id = @$_GET['hangsx_id'];
		// echo "hangsx_id<br>";
		// var_dump($hangsx_id);
		// echo "<br><br>";
		
		$hangsxLaptop = $this->siteSql->hangsxSql->getHangSXLaptop();
		$hangsxCamera = $this->siteSql->hangsxSql->getHangSXCamera();
		$laptopList = $this->siteSql->getAllLaptop();

		viewSite('allProductWithOneType', ['hangsxLaptop' => $hangsxLaptop, 'hangsxCamera' => $hangsxCamera, 'type' => 'laptop', 'laptopList' => $laptopList]);
	}


	function getAllCamera(){
		dd($_GET);
	}

	function getOneLaptop(){
		// dd($_GET);
		$hangsxLaptop = $this->siteSql->hangsxSql->getHangSXLaptop();
		$hangsxCamera = $this->siteSql->hangsxSql->getHangSXCamera();		

		$url_laptop = $_GET["url_laptop"];
		$laptop = $this->siteSql->getOneLaptopByUrl($url_laptop);
		$remarkableLaptopList = $this->siteSql->getRemarkableLaptop(4);
		$laptopWithHangSX = $this->siteSql->getLaptopWithHangSX($laptop->id_laptop, $laptop->hangsx_id, 4);

		// dd($laptop);
		viewSite('oneProduct', ['laptop' => $laptop, 'hangsxLaptop' => $hangsxLaptop, 'hangsxCamera' => $hangsxCamera, 'remarkableLaptopList' => $remarkableLaptopList, 'laptopWithHangSX' => $laptopWithHangSX]);
	}

	function getOneCamera(){
		// dd($_GET);
		$hangsxLaptop = $this->siteSql->hangsxSql->getHangSXLaptop();
		$hangsxCamera = $this->siteSql->hangsxSql->getHangSXCamera();		

		$url_camera = $_GET["url_camera"];
		$camera = $this->siteSql->getOneCameraByUrl($url_camera);
		$remarkableCameraList = $this->siteSql->getRemarkableCamera(2);
		$cameraWithHangSX = $this->siteSql->getCameraWithHangSX($camera->id_camera, $camera->hangsx_id, 2);

		// dd($camera);
		viewSite('oneProduct', ['camera' => $camera, 'hangsxLaptop' => $hangsxLaptop, 'hangsxCamera' => $hangsxCamera, 'remarkableCameraList' => $remarkableCameraList, 'cameraWithHangSX' => $cameraWithHangSX]);
	}
}

?>