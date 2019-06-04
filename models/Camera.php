<?php
class Camera
{
	public $id_camera;
	public $hangsx_id;
	public $ten_camera;
	public $gia_camera;
	public $dophangiai;
	public $ongkinh;
	public $bankinhhongngoai;
	public $url_camera;
	public $anh_camera;
	public $mota;
	public $soluong;
	function __construct($data = [])
	{
		$this->id_camera = $data['id_camera'];
		$this->hangsx_id = $data['hangsx_id'];
		$this->ten_camera = $data['ten_camera'];
		$this->gia_camera = $data['gia_camera'];
		$this->dophangiai = $data['dophangiai'];
		$this->ongkinh = $data['ongkinh'];
		$this->bankinhhongngoai = $data['bankinhhongngoai'];
		$this->url_camera = $data['url_camera'];
		$this->anh_camera = $data['anh_camera'];
		$this->mota = $data['mota'];
		$this->soluong = $data['soluong'];
		
	}
}

?>