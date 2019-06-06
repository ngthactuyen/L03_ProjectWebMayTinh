<?php
class HangSX
{
	public $id_nhaphang;
	public $tongtien;
	public $nhanvien_id;
	public $ngaytao;
	function __construct($data = [])
	{
		$this->id_nhaphang = $data['id_nhaphang'];
		$this->tongtien = $data['tongtien'];
		$this->nhanvien_id = $data['nhanvien_id'];
		$this->ngaytao = $data['ngaytao'];
	}
}

?>