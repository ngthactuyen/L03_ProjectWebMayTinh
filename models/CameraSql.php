<?php

class CameraSql
{
	function getAllCamera(){
		// $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
		$keyword = isset($_POST['txt_keyword']) ? $_POST['txt_keyword'] : '';
		$sql = "select * from tbl_camera join tbl_hangsx on tbl_camera.hangsx_id = tbl_hangsx.id_hangsx where id_camera like '%$keyword%' or ten_camera like '%$keyword%' order by tenhangsx, id_camera";
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
		return $camera = new Camera($temp);
	}

	function insertCamera($id_camera, $hangsx_id, $ten_camera, $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, $url_camera, $anh_camera, $mota)
	{
		$sql = "insert into tbl_camera(id_camera, hangsx_id, ten_camera, gia_camera, dophangiai, ongkinh, bankinhhongngoai, url_camera, anh_camera, mota) value ('$id_camera', $hangsx_id, '$ten_camera', $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, '$url_camera', '$anh_camera', '$mota')";
		// die($sql);
		return execute($sql);
	}

	function deleteCamera($id_camera){
		$sql = "delete from tbl_camera where id_camera like '$id_camera' ";
		return execute($sql);
	}

	function updateCamera($id_camera, $hangsx_id, $ten_camera, $gia_camera, $dophangiai, $ongkinh, $bankinhhongngoai, $url_camera, $anh_camera, $mota)
	{
		if ($anh_camera == '') {
			$sql = "update tbl_camera set hangsx_id = $hangsx_id, ten_camera = '$ten_camera', gia_camera = $gia_camera, dophangiai = $dophangiai, ongkinh = $ongkinh, bankinhhongngoai = $bankinhhongngoai, url_camera = '$url_camera', mota = '$mota' where id_camera like '$id_camera'";
		} else {
			$sql = "update tbl_camera set hangsx_id = $hangsx_id, ten_camera = '$ten_camera', gia_camera = $gia_camera, dophangiai = $dophangiai, ongkinh = $ongkinh, bankinhhongngoai = $bankinhhongngoai, url_camera = '$url_camera', anh_camera = '$anh_camera', mota = '$mota' where id_camera like '$id_camera'";
		}
		// die($sql);
		return execute($sql);
	}
}


?>