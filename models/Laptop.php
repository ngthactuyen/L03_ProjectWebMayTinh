<?php

class Laptop
{
	public $id_laptop;
	public $hangsx_id;
	public $ten_laptop;
	public $gia_laptop;
	public $manhinh;
	public $cpu;
	public $ram;
	public $ocung;
	public $vga;
	public $hdh;
	public $kichthuoc;
	public $khoiluong;
	public $pin;
	public $url_laptop;
	public $anh_laptop;
	public $nhucau;
	public $mota;
	public $soluong;

	function __construct($data = [])
	{
		$this->id_laptop = $data['id_laptop'];
		$this->hangsx_id = $data['hangsx_id'];
		$this->ten_laptop = $data['ten_laptop'];
		$this->gia_laptop = $data['gia_laptop'];
		$this->manhinh = $data['manhinh'];
		$this->cpu = $data['cpu'];
		$this->ram = $data['ram'];
		$this->ocung = $data['ocung'];
		$this->vga = $data['vga'];
		$this->hdh = $data['hdh'];
		$this->kichthuoc = $data['kichthuoc'];
		$this->khoiluong = $data['khoiluong'];
		$this->pin = $data['pin'];
		$this->url_laptop = $data['url_laptop'];
		$this->anh_laptop = $data['anh_laptop'];
		$this->nhucau = $data['nhucau'];
		$this->mota = $data['mota'];
		$this->soluong = $data['soluong'];
	}
}


?>