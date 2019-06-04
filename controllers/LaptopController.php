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
		$ocung = $_POST["txt_ocung"];
		$vga = $_POST["txt_vga"];
		$hdh = $_POST["txt_hdh"];
		$kichthuoc = $_POST["txt_kichthuoc"];
		$khoiluong = $_POST["txt_khoiluong"];
		$pin = $_POST["txt_pin"];
		$url_laptop = $_POST["txt_url"];
		$anh_laptop = 'assets/images/laptop/'.$_FILES['file_anh']['name'];
		$nhucau = $_POST["sl_nhucau"];
		$mota = $_POST["txt_mota"];

		$check = $this->laptopSql->insertLaptop($id_laptop, $hangsx_id, $ten_laptop, 
			$gia_laptop, $manhinh, $cpu, $ram, $ocung, $vga, $hdh, $kichthuoc, 
			$khoiluong, $pin, $url_laptop, $anh_laptop, $nhucau, $mota);
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

	public function delete()	
	{
		// dd($_GET);
		$id_laptop = $_GET['id_laptop'];
		$check = $this->laptopSql->deleteLaptop($id_laptop);
		if ($check) {
			setSuccessMessage('Xóa thành công');
			redirect('laptop');
		} else {
			setErrorMessage('Xóa thất bại');
			redirect('laptop');
		}
	}

	public function update()
	{
		// dd($_GET);
		$hangsxSql = new hangsxSql();
		$hangsxList = $hangsxSql->getHangSXLaptop();
		$id_laptop = $_GET['id_laptop'];
		$laptop = $this->laptopSql->getOneLaptop($id_laptop);
		viewAdmin('laptop/update', ['laptop' => $laptop, 'hangsxList' => $hangsxList]);
	}

	public function updatesave()
	{
		// dd($_FILES);
		// dd($_POST);
		$id_laptop = $_POST['txt_id_laptop'];
		$hangsx_id = $_POST["sl_hangsx_id"];
		$ten_laptop = $_POST["txt_ten_laptop"];
		$gia_laptop = $_POST["txt_gia_laptop"];
		$manhinh = $_POST["txt_manhinh"];
		$cpu = $_POST["txt_cpu"];
		$ram = $_POST["txt_ram"];
		$ocung = $_POST["txt_ocung"];
		$vga = $_POST["txt_vga"];
		$hdh = $_POST["txt_hdh"];
		$kichthuoc = $_POST["txt_kichthuoc"];
		$khoiluong = $_POST["txt_khoiluong"];
		$pin = $_POST["txt_pin"];
		$url_laptop = $_POST["txt_url"];
		$nhucau = $_POST["sl_nhucau"];
		$mota = $_POST["txt_mota"];

		if ($_FILES['file_anh']['name'] == '') {
			$anh_laptop = '';
			$check = $this->laptopSql->updateLaptop($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $ocung, $vga, $hdh, $kichthuoc, $khoiluong, $pin, $url_laptop, $anh_laptop, $nhucau, $mota);
		} else {
			$anh_laptop = 'assets/images/laptop/'.$_FILES['file_anh']['name'];
			$check = $this->laptopSql->updateLaptop($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $ocung, $vga, $hdh, $kichthuoc, $khoiluong, $pin, $url_laptop, $anh_laptop, $nhucau, $mota);
		}
		// die($check);
		if ($check) {
			move_uploaded_file($_FILES['file_anh']['tmp_name'], $anh_laptop);
			setSuccessMessage('Sửa thông tin thành công');
			redirect('laptop');		
		} else {
			setErrorMessage('Sửa thông tin thất bại');
			redirect('laptop');
		}
	}
}


?>