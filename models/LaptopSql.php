<?php

class LaptopSql
{
	function getAllLaptop(){
		// $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
		$keyword = isset($_POST['txt_keyword']) ? $_POST['txt_keyword'] : '';
		$sql = "select * from tbl_laptop join tbl_hangsx on tbl_laptop.hangsx_id = tbl_hangsx.id_hangsx where id_laptop like '%$keyword%' or ten_laptop like '%$keyword%' order by tenhangsx, nhucau";
		$laptopList = getAllData($sql);
		// dd($laptopList);
		$laptopObject = [];
		foreach ($laptopList as $laptop) {
			$laptopObject[] = new Laptop($laptop);
		}
		// dd($laptopObject);
		return $laptopObject;
	}

	public function getOneLaptop($id_laptop)
	{
		$temp = getOneData("select * from tbl_laptop where id_laptop like '$id_laptop'");
		return $laptop = new Laptop($temp);
	}

	function insertLaptop($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $ocung, $vga, $hdh, $kichthuoc, $khoiluong, $pin, $url_laptop, 
		$anh_laptop, $nhucau, $mota)
	{
		$sql = "insert into tbl_laptop(id_laptop, hangsx_id, ten_laptop, gia_laptop, manhinh, cpu, ram, ocung, vga, hdh, kichthuoc, khoiluong, pin, url_laptop, anh_laptop, nhucau, mota) value ('$id_laptop', $hangsx_id, '$ten_laptop',
			$gia_laptop, '$manhinh', '$cpu', '$ram', '$ocung', '$vga', '$hdh',
			'$kichthuoc', $khoiluong, '$pin', '$url_laptop', '$anh_laptop', $nhucau, 
			'$mota')";
		// die($sql);
		return execute($sql);
	}

	function deleteLaptop($id_laptop){
		$sql = "delete from tbl_laptop where id_laptop like '$id_laptop' ";
		return execute($sql);
	}

	function updateLaptop($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $ocung, $vga, $hdh, $kichthuoc, $khoiluong, $pin, $url_laptop, $anh_laptop, $nhucau, $mota)
	{
		if ($anh_laptop == '') {
			$sql = "update tbl_laptop set hangsx_id = $hangsx_id, ten_laptop = '$ten_laptop', gia_laptop = $gia_laptop, manhinh = '$manhinh', cpu = '$cpu', ram = '$ram', ocung = '$ocung', vga = '$vga', hdh = '$hdh', kichthuoc = '$kichthuoc', khoiluong = $khoiluong, pin = '$pin', url_laptop = '$url_laptop', nhucau = $nhucau, mota = '$mota' where id_laptop like '$id_laptop'";
		} else {
			$sql = "update tbl_laptop set hangsx_id = $hangsx_id, ten_laptop = '$ten_laptop', gia_laptop = $gia_laptop, manhinh = '$manhinh', cpu = '$cpu', ram = '$ram', ocung = '$ocung', vga = '$vga', hdh = '$hdh', kichthuoc = '$kichthuoc', khoiluong = $khoiluong, pin = '$pin', url_laptop = '$url_laptop', anh_laptop = '$anh_laptop', nhucau = $nhucau, mota = '$mota' where id_laptop like '$id_laptop'";
		}
		// die($sql);
		return execute($sql);
	}
}


?>