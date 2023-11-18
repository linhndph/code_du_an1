<?php
    if(is_array($ht)&&isset($ht)){
        extract($ht);
    }
    $hinhpath="../views/Admin/quanlyhethong/anhhethong/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src= '".$hinhpath."' width='100px' height='100px'>";
    }else{
        $hinh="No file img!";
    }
  ?>

<h2>Sửa hệ thống</h2>
<form action="AdminController.php?act=updatequanlyhethong" method="post">
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa thông tin hệ thống</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <input type="hidden" id="inputName" class="form-control" value="<?php if(isset($id)&&($id>0)) echo $id;?>" name="id">
              </div>
              <div class="form-group">
                <label for="inputName">Tên ảnh</label>
                <input type="text" id="inputName" class="form-control" value="<?php if(isset($ten_img)&&($ten_img>0)) echo $ten_img;?>" name="ten_img">
              </div>
              <div class="form-group">
                <label for="inputDescription">Ảnh </label>
                <input type="file" name="img"> <?php echo $hinh;?>
              </div>
              <input type="submit" class="btn btn-outline-danger" value="Sửa " name="capnhat">
            </div>
            <!-- /.card-body -->
            <?php
           if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
           }
           ?>
          </div>
  </form>