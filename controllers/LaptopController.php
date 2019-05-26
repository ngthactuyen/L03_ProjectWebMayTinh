<?php
class LaptopController
{
	protected $laptopSql;
	
	function __construct()
	{
		$this->laptopSql = new LaptopSql();
	}

	function index(){
		if (isset($_POST['txt_keyword'])) {
			$keyword = $_POST['txt_keyword'];
			$laptopList = $this->laptopSql->getAllLaptop();
			viewAdmin('laptop/index', ['laptopList' => $laptopList, 'keyword' => $keyword]);
		} else {
			$laptopList = $this->laptopSql->getAllLaptop();
			viewAdmin('laptop/index', ['laptopList' => $laptopList]);
		}
		
	}

	function add(){
		$hangsxSql = new hangsxSql();
		$hangsxList = $hangsxSql->getHangSXLaptop();
		viewAdmin('laptop/add', ['hangsxList' => $hangsxList]);
	}

	function addsave(){
		// dd($_POST);
		// dd($_FILES);
		$id_laptop = $_POST['txt_id_laptop'];
		$hangsx_id = $_POST["sl_hangsx_id"];
		$ten_laptop = $_POST["txt_ten_laptop"];
		$gia_laptop = $_POST["txt_gia_laptop"];
		$manhinh = $_POST["txt_manhinh"];
		$cpu = $_POST["txt_cpu"];
		$ram = $_POST["txt_ram"];
		$vga = $_POST["txt_vga"];
		$hdd = $_POST["txt_hdd"];
		$ssd = $_POST["txt_ssd"];
		$hdh = $_POST["txt_hdh"];
		$khoiluong = $_POST["txt_khoiluong"];
		$pin = $_POST["txt_pin"];
		$url_laptop = $_POST["txt_url"];
		$anh_laptop = 'assets/images/laptop/'.$_FILES['file_anh']['name'];
		$nhucau = $_POST["sl_nhucau"];
		$mota = $_POST["txt_mota"];

		$check = $this->laptopSql->insertLaptop($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $vga, $hdd, $ssd, $hdh, $khoiluong, 
			$pin, $url_laptop, $anh_laptop, $nhucau, $mota);
		// dd($check);
		if ($check) {
			move_uploaded_file($_FILES['file_anh']['tmp_name'], $anh_laptop);
			setSuccessMessage('Thêm mới thành công');
			redirect('laptop');
		} else {
			setErrorMessage('Thêm mới thất bại');
			redirect('laptop');
		}
	}
}


?>