<?php

class LaptopSql
{
	function getAllLaptop(){
		// $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
		$keyword = isset($_POST['txt_keyword']) ? $_POST['txt_keyword'] : '';
		$sql = "select * from tbl_laptop join tbl_hangsx 
			on tbl_laptop.hangsx_id = tbl_hangsx.id_hangsx
			where id_laptop like '%$keyword%' or ten_laptop like '%$keyword%'";
		$laptopList = getAllData($sql);
		// dd($laptopList);
		$laptopObject = [];
		foreach ($laptopList as $laptop) {
			$laptopObject[] = new Laptop($laptop);
		}
		// dd($laptopObject);
		return $laptopObject;
	}

	function insertLaptop($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $vga, $hdd, $ssd, $hdh, $khoiluong, $pin, $url_laptop, 
		$anh_laptop, $nhucau, $mota)
	{
		$sql = "insert into tbl_laptop(id_laptop, hangsx_id, ten_laptop, gia_laptop, manhinh, cpu, ram, vga, hdd, ssd, hdh, khoiluong, pin, url_laptop, anh_laptop, nhucau, mota) value ('$id_laptop', $hangsx_id, '$ten_laptop', $gia_laptop, $manhinh, '$cpu', $ram, '$vga', $hdd, $ssd, '$hdh', 
			$khoiluong, $pin, '$url_laptop', '$anh_laptop', $nhucau, '$mota')";
		// dd($sql);
		return execute($sql);
	}
}


?>