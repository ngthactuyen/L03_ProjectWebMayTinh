<?php
/**
 * 
 */
class NhapHangSql
{	
	function getAllNhapHang(){
		// dd($_GET);
		// $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
		$keyword = isset($_POST['txt_keyword']) ? $_POST['txt_keyword'] : '';
		$sql = "select * from tbl_nhaphang join tbl_nhanvien on tbl_nhaphang.nhanvien_id = tbl_nhanvien.id_nhanvien where id_nhaphang = $keyword ";
		$hangsxList = getAllData($sql);
		// dd($hangsxList);
		$hangsxObject = [];
		foreach ($hangsxList as $hangsx) {
			$hangsxObject[] = new HangSX($hangsx);
		}
		// dd($hangsxObject);
		return $hangsxObject;
	}

	public function getOneHangSX($id_hangsx)
	{
		$temp = getOneData("select * from tbl_hangsx where id_hangsx = $id_hangsx");
		return $hangsx = new HangSX($temp);
	}


	function getHangSXLaptop()
	{
		$sql = "select * from tbl_hangsx where loaisp = 1 order by tenhangsx";
		$hangsxList = getAllData($sql);
		// dd($hangsxList);
		$hangsxObject = [];
		foreach ($hangsxList as $hangsx) {
			$hangsxObject[] = new HangSX($hangsx);
		}
		// dd($hangsxObject);
		return $hangsxObject;
	}

	function getHangSXCamera()
	{
		$sql = "select * from tbl_hangsx where loaisp = 2 order by tenhangsx";
		$hangsxList = getAllData($sql);
		// dd($hangsxList);
		$hangsxObject = [];
		foreach ($hangsxList as $hangsx) {
			$hangsxObject[] = new HangSX($hangsx);
		}
		// dd($hangsxObject);
		return $hangsxObject;
	}

	function insertHangSX($loaisp, $tenhangsx, $anh_hangsx){
		$sql = "insert tbl_hangsx(loaisp, tenhangsx, anh_hangsx) value ($loaisp, '$tenhangsx', '$anh_hangsx')";
		return execute($sql);
	}

	function deleteHangSX($id_hangsx){
		$sql = "delete from tbl_hangsx where id_hangsx = $id_hangsx";
		return execute($sql);
	}

	function updateHangSX($id_hangsx, $loaisp, $tenhangsx, $anh_hangsx){
		if ($anh_hangsx == '') {
			$sql = "update tbl_hangsx set loaisp = $loaisp, tenhangsx = '$tenhangsx' where id_hangsx = $id_hangsx";
		} else {
			$sql = "update tbl_hangsx set loaisp = $loaisp, tenhangsx = '$tenhangsx', anh_hangsx = '$anh_hangsx' where id_hangsx = $id_hangsx";
		}
		// return $sql;
		return execute($sql);
	}
}


?>