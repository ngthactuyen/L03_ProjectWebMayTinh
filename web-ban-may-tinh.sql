create database L03_ProjectWebMAYTINH CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use database WEBMAYTINH;

create table tbl_nhanvien(
	id_nhanvien int primary key auto_increment,
	hoten varchar(100),
    diachi varchar(100),
    sdt varchar(20),
	tendangnhap varchar(100),
	matkhau varchar(100),
	phanquyen int,
	-- 1: admin
	-- 0: nhân viên
	ngaytao datetime DEFAULT CURRENT_TIMESTAMP,
	constraint uq_tendangnhap unique (tendangnhap)
);

create table tbl_hangsx(
	id_hangsx int auto_increment primary key,
	loaisp int,
	--1: laptop  2: camera
	tenhangsx varchar(100),
	anh_hangsx varchar(100)
);

create table tbl_laptop(
	id_laptop varchar(100) primary key,
	hangsx_id int,
	ten_laptop varchar(500),
	gia_laptop float,
	manhinh float,
	cpu varchar(200),
	ram int,
	vga varchar(200),
	hdd int,
	ssd int,
	hdh varchar(100),
	khoiluong float,
	pin int,
	url_laptop varchar(200),
	anh_laptop varchar(200),
	nhucau int,
	-- 1: học tập, văn phòng
	--2: đồ họa- kỹ thuật
	--3: gaming
	--4: cao cấp- sang trọng
	mota longtext,
	soluong int,
	constraint uq_url_laptop unique(url_laptop)
);

create table tbl_camera(
	id_camera varchar(100) primary key,
	hangsx_id int,
	ten_camera varchar(200),
	gia_camera float,
	dophangiai float,
	ongkinh float,
	gocquansat int,
	url_camera varchar(200),
	anh_camera varchar(200),
	loai_camera int,
	--1: wifi
	--2: analog
	mota longtext,
	soluong int,
	constraint uq_url_camera unique(url_camera)
);

create table tbl_hoadon(
	id_hoadon int auto_increment primary key,
	tenkh varchar(200),
	sdt varchar(20),
	email varchar(100),
	diachi varchar(500),
	trangthaihoadon int,
	-- -1: chưa liên hệ
	-- 0: Chưa thanh toán
	-- 1: Đã thanh toán
	tongtien float,
	nhanvien_id int,
	ngaytao datetime DEFAULT CURRENT_TIMESTAMP,
	constraint fk_hoadon_nhanvien foreign key (nhanvien_id) references tbl_nhanvien(id_nhanvien)
);

create table tbl_chitiethd(
	id_chitiethd int auto_increment primary key,
	hoadon_id int,
	loaisp int,
	--1: laptop  2: camera
	sanpham_id varchar(100),	
	soluong int,
	constraint fk_chitiethd_hoadon foreign key (hoadon_id) references tbl_hoadon(id_hoadon)
);

 create table tbl_nhaphang(
 	id_nhaphang int auto_increment primary key,
 	tongtien float,
 	nhanvien_id int,
 	ngaytao datetime DEFAULT CURRENT_TIMESTAMP,
 	constraint fk_nhaphang_nhanvien foreign key (nhanvien_id) references tbl_nhanvien (id_nhanvien)
);

create table tbl_nhaphangchitiet(
	id_nhaphangchitiet int auto_increment primary key,
	nhaphang_id int,
	loaisp int,
	--1: laptop  2: camera
	sanpham_id varchar(100),
	soluong int,
	constraint fk_nhaphangchitiet_nhaphang foreign key (nhaphang_id) references tbl_nhaphang (id_nhaphang)
);

 