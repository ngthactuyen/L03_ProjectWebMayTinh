<?php
class NhanVien
{
	public $id_nhanvien;
	public $hoten;
	public $diachi;
	public $sdt;
	public $tendangnhap;
	public $matkhau;
	public $phanquyen;
	public $ngaytao;
	
	function __construct($data = [])
	{
		$this->id_nhanvien = $data['id_nhanvien'];
		$this->hoten = $data['hoten'];
		$this->diachi = $data['diachi'];
		$this->sdt = $data['sdt'];
		$this->tendangnhap = $data['tendangnhap'];
		$this->matkhau = $data['matkhau'];
		$this->phanquyen = $data['phanquyen'];
		$this->ngaytao = $data['ngaytao'];
		
	}
}

?>