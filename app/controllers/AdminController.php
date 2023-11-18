<?php
include "../models/pdo.php";
include "../models/bienthe.php";
include "../models/tintuc.php";
include "../models/chucvu.php";
include "../models/casan.php";
include "../models/danhmuc.php";
?>
<?
include "../models/AdminModel.php";
?>
<?php 
include "../views/Admin/layout/header.php";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php 
include "../views/Admin/layout/nav3.php";
?>
 
<?php 
include "../views/Admin/layout/boxleft.php";
?>
<div class="content-wrapper">
<?php

if (isset($_GET['act']) && ($_GET['act']!= "")) {
    $act = $_GET['act'];
    switch ($act) {
        //Quản lý biến thể
        case 'dsbienthe':
            
            $dsbienthe=loadall_bienthe();
            include '../views/Admin/quanlybienthe/danhsachbienthe.php';
            break;

        case 'thembienthe':
            if(isset($_POST['thembienthe'])&&($_POST['thembienthe'])){
                $ten_bien_the=$_POST['tenbienthe'];
                $so_luong=$_POST['soluong'];
                $gia=$_POST['gia'];
                $trang_thai=$_POST['trangthai'];
                insert_bien_the($ten_bien_the, $so_luong, $gia, $trang_thai);
                $thongbao="Thêm thành công";
            }
                include '../views/Admin/quanlybienthe/add.php';
                break;

        case 'suabienthe':
            if(isset($_GET['id_bien_the'])&&($_GET['id_bien_the']>0)){
                $id_bien_the=$_GET['id_bien_the'];
                $ds=loadone_bien_the($id_bien_the);
            }
            include '../views/Admin/quanlybienthe/update.php';
            break;

        case 'updatebienthe':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id_bien_the = $_POST['idbienthe'];
                $ten_bien_the = $_POST['tenbienthe'];
                $so_luong = $_POST['soluong'];
                $gia = $_POST['gia'];
                $trang_thai = $_POST['trangthai'];

                update_bienthe($id_bien_the,$ten_bien_the,$so_luong,$gia,$trang_thai);
                $thongbao="Cập nhật thành công";
            }
            $dsbienthe=loadall_bienthe();
            include '../views/Admin/quanlybienthe/danhsachbienthe.php';
            break;

        case 'xoabienthe':
            if(isset($_GET['id_bien_the'])&&($_GET['id_bien_the']>0)){
                delete_bien_the($_GET['id_bien_the']);
            }
            $dsbienthe=loadall_bienthe();
                include '../views/Admin/quanlybienthe/danhsachbienthe.php';
                break;

        //Quản lý bình luận
        case 'dsbinhluan':
            include '../views/Admin/quanlybinhluan/danhsachbinhluan.php';
            break;

        case 'xoabinhluan':
            include '../views/Admin/quanlybinhluan/danhsachbinhluan.php';
            break;

        //Quản lý ca sân
        case 'dscasan':
            $listcasan = loadAllCASAN();
            include '../views/Admin/quanlycasan/danhsachcasan.php';
            break;

        case 'themcasan':
            if (isset($_POST['themcasan'])) {
                $ten_ca = $_POST['tenca'];
                $thoi_gian_bd = $_POST['thoigianbd'];
                $thoi_gian_kt = $_POST['thoigiankt'];
                insert_casan($ten_ca, $thoi_gian_bd, $thoi_gian_kt);
                $thongbao = "Thêm thành công";
            }
            include '../views/Admin/quanlycasan/add.php';
            break;

        case 'suacasan':
            if (isset($_GET["id_ca"]) && $_GET["id_ca"] > 0) {
                $id_ca = $_GET["id_ca"];
                $cs = loadOneCASAN($id_ca);
            }
            include '../views/Admin/quanlycasan/update.php';
            break;
        case 'updatecasan':
            if (isset($_POST['capnhat'])) {
                $id_ca = $_POST["idcasan"];
                $ten_ca = $_POST['tenca'];
                $thoi_gian_bd = $_POST['thoigianbd'];
                $thoi_gian_kt = $_POST['thoigiankt'];
                update_casan($id_ca, $ten_ca, $thoi_gian_bd, $thoi_gian_kt);
                $thongbao = "Cập nhật thành công";
            }

            $listcasan = loadAllCASAN();
            include '../views/Admin/quanlycasan/danhsachcasan.php';
            break;
        case 'xoacasan':
            if (isset($_GET["id_ca"]) && $_GET["id_ca"] > 0) {
                $id_ca = $_GET["id_ca"];
                delete_casan($id_ca);
            }
            $listcasan = loadAllCASAN();
            include '../views/Admin/quanlycasan/danhsachcasan.php';
            break;
        
        //Quản lý danh mục
        case 'dsdanhmuc':
            $listdanhmuc = loadAll();
            include '../views/Admin/quanlydanhmuc/danhsachdanhmuc.php';
            break;

        case 'themdanhmuc':
            if (isset($_POST['themmoi'])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                insert_danhmuc($tendanhmuc);
                $thongbao = "Thêm thành công";
            }
            include '../views/Admin/quanlydanhmuc/add.php';
            break;

        case 'suadanhmuc':
            if (isset($_GET["id_danh_muc"]) && $_GET["id_danh_muc"] > 0) {
                $id_danh_muc = $_GET["id_danh_muc"];
                $dm = loadOne($id_danh_muc);
            }
            include '../views/Admin/quanlydanhmuc/update.php';
            break;
        case 'updatedanhmuc':
            if (isset($_POST['capnhat'])) {
                $id_danh_muc = $_POST["iddanhmuc"];
                $ten_danh_muc = $_POST['tendanhmuc'];
                update_danhmuc($id_danh_muc, $ten_danh_muc);
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadAll();
            include '../views/Admin/quanlydanhmuc/danhsachdanhmuc.php';
            break;
        case 'xoadanhmuc':
            if (isset($_GET["id_danh_muc"]) && $_GET["id_danh_muc"] > 0) {
                $id_danh_muc = $_GET["id_danh_muc"];
                delete_danhmuc($id_danh_muc);
            }
            $listdanhmuc = loadAll();
            include '../views/Admin/quanlydanhmuc/danhsachdanhmuc.php';
            break;

        //Quản lý đặt sân
        case 'dsdatsan':
            include '../views/Admin/quanlydatsan/danhsachdatsan.php';
            break;
        case 'suadsdatsan':
                include '../views/Admin/quanlydatsan/update.php';
                break;
        case 'xoadsdatsan':
                    include '../views/Admin/quanlydatsan/delete.php';
                    break;

        //Quản lý khuyến mãi
        case 'dskhuyenmai':
            include '../views/Admin/quanlykhuyenmai/danhsachkhuyenmai.php';
            break;

        case 'themkhuyenmai':
            include '../views/Admin/quanlykhuyenmai/add.php';
            break;

        case 'suakhuyenmai':
            include '../views/Admin/quanlykhuyenmai/update.php';
            break;

        case 'xoakhuyenmai':
            include '../views/Admin/quanlykhuyenmai/delete.php';
             break;

        //Quản lý liên hệ
        case 'dslienhe':
            include '../views/Admin/quanlylienhe/danhsachlienhe.php';
            break;

        case 'xoalienhe':
            include '../views/Admin/quanlylienhe/delete.php';
            break;

        //Quản lý sân:
        case 'dssan':
            include '../views/Admin/quanlysan/danhsachsan.php';
            break;

        case 'themsan':
            include '../views/Admin/quanlysan/add.php';
            break;

        case 'suasan':
            include '../views/Admin/quanlysan/update.php';
            break;

        case 'xoasan':
            include '../views/Admin/quanlysan/delete.php';
            break;

       // quản lý tài khoản:
        case 'dstaikhoan':
            include '../views/Admin/quanlytaikhoan/danhsachtaikhoan.php';
            break;
        case 'themtaikhoan':
                include '../views/Admin/quanlytaikhoan/add.php';
                break;
        case 'suataikhoan':
                include '../views/Admin/quanlytaikhoan/update.php';
                break;
        case 'xoataikhoan':
                include '../views/Admin/quanlytaikhoan/delete.php';
                break;

        //Quản lý tin tức
        case 'dstintuc':
            $dstintuc=loadall_tintuc();
            include '../views/Admin/quanlytintuc/danhsachtintuc.php';
            break;       
        case 'themtintuc':
            if(isset($_POST['themtintuc'])&&($_POST['themtintuc'])){
                $tieu_de=$_POST['tieude'];
                $noi_dung=$_POST['noidung'];
                $img_tin_tuc = $_FILES['img_tin_tuc']['name'];
 
                $target_dir = "../views/Admin/quanlytintuc/anhtintuc/";
                $target_file = $target_dir.basename($_FILES['img_tin_tuc']['name']);

                if(move_uploaded_file($_FILES['img_tin_tuc']['tmp_name'], $target_file)){
                   echo "Bạn đã upload ảnh thành công";
                }else{
                   echo "Upload ảnh không thành công";
                }
                $ngay_dang=$_POST['ngaydang'];
                insert_tin_tuc($tieu_de, $noi_dung, $img_tin_tuc, $ngay_dang);
                $thongbao="Thêm thành công";
            }
            include '../views/Admin/quanlytintuc/add.php';
            break;

        case 'suatintuc':
            if(isset($_GET['id_tin_tuc'])&&($_GET['id_tin_tuc']>0)){
                $id_tin_tuc=$_GET['id_tin_tuc'];
                $tt=loadone_tin_tuc($id_tin_tuc);
            }
            include '../views/Admin/quanlytintuc/update.php';
            break;

        case 'xoatintuc':
            if(isset($_GET['id_tin_tuc'])&&($_GET['id_tin_tuc']>0)){
                delete_tin_tuc($_GET['id_tin_tuc']);
            }
            $dstintuc=loadall_tintuc();
            include '../views/Admin/quanlytintuc/danhsachtintuc.php';
            break;
        case 'updatetintuc':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_tin_tuc = $_POST['idtintuc'];
                    $tieu_de = $_POST['tieude'];
                    $noi_dung = $_POST['noidung'];
                    $img_tin_tuc = $_POST['img_tin_tuc'];
                    $ngay_dang = $_POST['ngay_dang'];
                    
    
                    update_tin_tuc($id_tin_tuc,$tieu_de,$noi_dung,$img_tin_tuc,$ngay_dang);
                    $thongbao="Cập nhật thành công";
                }
                $dstintuc=loadall_tintuc();
                include '../views/Admin/quanlytintuc/danhsachtintuc.php';
                break;
          //Quản lý chức vụ
          case 'dschucvu':
            $dschucvu=loadall_chuc_vu();
            include '../views/Admin/quanlychucvu/danhsachchucvu.php';
            break;
        case 'themchucvu':          
            if(isset($_POST['themchucvu'])&&($_POST['themchucvu'])){
                $id_chuc_vu=$_POST['id_chuc_vu'];
                $ten_chuc_vu=$_POST['ten_chuc_vu'];
                $role=$_POST['role'];
                insert_chuc_vu($id_chuc_vu,$ten_chuc_vu, $role);
                $thongbao="Thêm thành công";
            }
            include '../views/Admin/quanlychucvu/add.php';
            break;
        case 'suachucvu':
            if(isset($_GET['id_chuc_vu'])&&($_GET['id_chuc_vu']>0)){
                $id_chuc_vu=$_GET['id_chuc_vu'];
                $ds=loadone_chuc_vu($id_chuc_vu);
            }
            include '../views/Admin/quanlychucvu/update.php';
            break;
        case 'updatechucvu':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_chuc_vu = $_POST['id_chuc_vu'];
                    $ten_chuc_vu = $_POST['ten_chuc_vu'];
                    $role = $_POST['role'];
 
    
                    update_chuc_vu($id_chuc_vu,$ten_chuc_vu,$role);
                    $thongbao="Cập nhật thành công";
                }
                $dschucvu=loadall_chuc_vu();
                include '../views/Admin/quanlychucvu/danhsachchucvu.php';
                break;   
        case 'xoachucvu':
            if(isset($_GET['id_chuc_vu'])&&($_GET['id_chuc_vu']>0)){
                delete_chuc_vu($_GET['id_chuc_vu']);
            }
            $dschucvu=loadall_chuc_vu();
            include '../views/Admin/quanlychucvu/danhsachchucvu.php';
            break;
        case 'dsquanlyhethong':
            include '../views/Admin/quanlyhethong/danhsachquanlyhethong.php';
            break;
        case 'themquanlyhethong':
            include '../views/Admin/quanlyhethong/add.php';
            break;
        case 'suaquanlyhethong':
            include '../views/Admin/quanlyhethong/update.php';
            break;
        case 'xoaquanlyhethong':
            include '../views/Admin/quanlyhethong/delete.php';
            break;



        default:
            include "../views/Admin/layout/noidung.php";
            break;
    }
}
else{
    include "../views/Admin/layout/noidung.php";
}

?>
  </div>


<?php 
include "../views/Admin/layout/footer.php";
?>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php 
include "../views/Admin/layout/linkjs.php";
?>