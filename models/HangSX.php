<?php
class HangSX
{
	public $id_hangsx;
	public $loaisp;
	public $tenhangsx;
	public $anh_hangsx;
	function __construct($data = [])
	{
		$this->id_hangsx = $data['id_hangsx'];
		$this->loaisp = $data['loaisp'];
		$this->tenhangsx = $data['tenhangsx'];
		$this->anh_hangsx = $data['anh_hangsx'];
	}
}

?>