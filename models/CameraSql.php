<?php

class CameraSql
{
	function getAllCamera(){
		// $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
		$keyword = isset($_POST['txt_keyword']) ? $_POST['txt_keyword'] : '';
		$sql = "select * from tbl_camera join tbl_hangsx on tbl_camera.hangsx_id = tbl_hangsx.id_hangsx where id_camera like '%$keyword%' or ten_camera like '%$keyword%' order by tenhangsx";
		$cameraList = getAllData($sql);
		// dd($cameraList);
		$cameraObject = [];
		foreach ($cameraList as $camera) {
			$cameraObject[] = new Camera($camera);
		}
		// dd($cameraObject);
		return $cameraObject;
	}

	public function getOneCamera($id_camera)
	{
		$temp = getOneData("select * from tbl_camera where id_camera like '$id_camera'");
		return $camera = new camera($temp);
	}

	function insertCamera($id_camera, $hangsx_id, $ten_camera, $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, $url_camera, $anh_camera, $mota)
	{
		$sql = "insert into tbl_camera(id_camera, hangsx_id, ten_camera, gia_camera, dophangiai, ongkinh, bankinhhongngoai, url_camera, anh_camera, mota) value ('$id_camera', $hangsx_id, '$ten_camera', $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, '$url_camera', '$anh_camera', '$mota')";
		// die($sql);
		return execute($sql);
	}

	function deleteCamera($id_laptop){
		$sql = "delete from tbl_laptop where id_laptop like '$id_laptop' ";
		return execute($sql);
	}

	function updateCamera($id_laptop, $hangsx_id, $ten_laptop, $gia_laptop, $manhinh, $cpu, $ram, $ocung, $vga, $hdh, $kichthuoc, $khoiluong, $pin, $url_laptop, $anh_laptop, $nhucau, $mota)
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