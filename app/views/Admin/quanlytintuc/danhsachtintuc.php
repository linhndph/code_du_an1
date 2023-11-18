<h2>Danh sách tin tức</h2>
<div class="col-12">
  <div class="card">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tiêu Đề</th>
            <th>Nội Dung</th>
            <th>Ảnh</th>
            <th>Ngày đăng</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($dstintuc as $ds){
              extract($ds);
              $themtt="AdminController.php?act=themtintuc&id_tin_tuc=".$id_tin_tuc;
              $suatt="AdminController.php?act=suatintuc&id_tin_tuc=".$id_tin_tuc;
              $xoatt="AdminController.php?act=xoatintuc&id_tin_tuc=".$id_tin_tuc;
              $hinhpath="../views/Admin/quanlytintuc/anhtintuc/".$img_tin_tuc;
                    if(is_file($hinhpath)){
                        $hinhpath="<img src= '".$hinhpath."' width='100px' height='100px'>";
                    }else{
                        $hinhpath="No file img!";
                    }
              
              echo '
              <tr>
              <td>'.$id_tin_tuc.'</td>
              <td>'.$tieu_de.'</td>
              <td>'.$noi_dung.'</td>
              <td class="project-actions text-right">
                <li class="list-inline-item">
                  '.$hinhpath.'
                </li>
              </td>
              <td>'.$ngay_dang.'</td>
  
              <td>
              <a class="btn btn-info btn-sm" href="'.$themtt.'">
              <i class="fas fa-pencil-alt">
              </i>
              Thêm
            </a>
                <a class="btn btn-info btn-sm" href="'.$suatt.'">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="'.$xoatt.'">
                  <i class="fas fa-trash"></i>
                  Xóa
                </a>
              </td>
            </tr>
              ';
            }
          ?>
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>