<?php
function loadall_tintuc(){
    $sql="select * from tb_tin_tuc order by id_tin_tuc";
    $dstintuc=pdo_query($sql);
    return  $dstintuc;
}

function insert_tin_tuc($tieu_de, $noi_dung, $img_tin_tuc, $ngay_dang){
    $sql = "INSERT INTO `tb_tin_tuc`(`tieu_de`, `noi_dung`, `img_tin_tuc`, `ngay_dang`) VALUES ('$tieu_de', '$noi_dung', '$img_tin_tuc', '$ngay_dang');";
    pdo_execute($sql);
}

function delete_tin_tuc($id_tin_tuc){
    $sql="delete from tb_tin_tuc where id_tin_tuc=".$id_tin_tuc;
    pdo_execute($sql);
}
function update_tin_tuc($id_tin_tuc,$tieu_de,$noi_dung,$img_tin_tuc,$ngay_dang){
      if ($img_tin_tuc!="" ) {
        $sql = "UPDATE tb_tin_tuc SET id_tin_tuc='$id_tin_tuc',tieu_de='$tieu_de',noi_dung='$noi_dung',img_tin_tuc='$img_tin_tuc',ngay_dang='$ngay_dang' WHERE id_tin_tuc = '$id_tin_tuc'";
    } else {
        $sql = "UPDATE tb_tin_tuc SET id_tin_tuc='$id_tin_tuc',tieu_de='$tieu_de',noi_dung='$noi_dung',ngay_dang='$ngay_dang' WHERE id_tin_tuc = '$id_tin_tuc'";
    }
    
 
    pdo_execute($sql);
}
function loadone_tin_tuc($id_tin_tuc){
    $sql = "select * from tb_tin_tuc where id_tin_tuc = '$id_tin_tuc'";
    $tt = pdo_query_one($sql);
    return $tt;
}


?>