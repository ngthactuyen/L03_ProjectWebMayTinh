<?php
/**
 * 
 */
class NhanVienSql
{	
	function getAllNhanVien(){
		// dd($_GET);
		// $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
		$keyword = isset($_POST['txt_keyword']) ? $_POST['txt_keyword'] : '';
		$sql = "select * from tbl_nhanvien where hoten like '%$keyword%' order by phanquyen desc";
		$nhanvienList = getAllData($sql);
		// dd($nhanvienList);
		$nhanvienObject = [];
		foreach ($nhanvienList as $nhanvien) {
			$nhanvienObject[] = new NhanVien($nhanvien);
		}
		// dd($nhanvienObject);
		return $nhanvienObject;
	}

	public function getOneNhanVienByTendangnhap($tendangnhap, $matkhau)
	{
		$temp = getOneData("select * from tbl_nhanvien where tendangnhap like '$tendangnhap' and matkhau like '$matkhau'");
		return $nhanvien = new NhanVien($temp);
	}

	public function getOneNhanVien($id_nhanvien)
	{
		$temp = getOneData("select * from tbl_nhanvien where id_nhanvien = $id_nhanvien");
		return $nhanvien = new NhanVien($temp);
	}



	function insertNhanVien($hoten, $diachi, $sdt, $tendangnhap, $matkhau, $phanquyen)
	{
		$sql = "insert tbl_nhanvien(hoten, diachi, sdt, tendangnhap, matkhau, phanquyen) value ('$hoten', '$diachi', $sdt, '$tendangnhap', '$matkhau', $phanquyen)";
		return execute($sql);
	}

	function deleteNhanVien($id_nhanvien){
		$sql = "delete from tbl_nhanvien where id_nhanvien = $id_nhanvien";
		return execute($sql);
	}

	function updateNhanVien($id_nhanvien, $hoten, $diachi, $sdt, $tendangnhap, $matkhau, $phanquyen)
	{
		$sql = "update tbl_nhanvien set hoten = '$hoten', diachi = '$diachi', sdt = '$sdt', tendangnhap = '$tendangnhap', matkhau = '$matkhau', phanquyen = $phanquyen where id_nhanvien = $id_nhanvien";
		// return $sql;
		// die($sql);
		return execute($sql);
	}
}


?>