function validate() {
	alert('test');
	var idcamera = document.formCamera.txt_id_camera.value;
	var tencamera = document.formCamera.txt_ten_camera.value;
	var giacamera = document.formCamera.txt_gia_camera.value;
	var dophangiai = document.formCamera.txt_dophangiai.value;
	var ongkinh = document.formCamera.txt_ongkinh.value;
	var bankinhhongngoai = document.formCamera.txt_bankinhhongngoai.value;
	var url = document.formCamera.txt_url.value;
	
	if (idcamera == '' || tencamera == '' || giacamera == '' || dophangiai == '' || 
		ongkinh == '' bankinhhongngoai == '' || url == '') {
		alert('Các trường có dấu * không được để trống!');
		return false;
	}
}