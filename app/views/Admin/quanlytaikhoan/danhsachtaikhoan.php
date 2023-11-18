<h2>Danh sách tài khoản:</h2>
<style>
    .timkiem{
        display: flex;
        
    }
.timkiem1>input{
    padding: 5px 50px 5px 5px;
}
.timkiem1>button{
    padding: 5px 5px 5px 5px;
   
}
.timkiem1{
    margin-left:3px;
}
.timkiem2{
    margin-left:400px;
    display: flex;
  
}
.timkiem2>select{
    padding: 6px 150px 6px 5px;
}
.timkiem2>button{
    padding: 5px 5px 5px 5px;
   
}
</style>
<div  class="timkiem">

<div class="timkiem1">
<input type="text" name="" placeholder="Tìm kiếm theo tên">
<button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
</div>
<div class="timkiem2">
<select name="" id="">
    <option value="">Sân bóng đá</option>
    <option value="">Sân bóng chuyền</option>
    <option value="">Sân bóng rổ</option>

</select>
<button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
</div>

</div>

    <table class="table table-striped projects">
        <thead>
                <tr>
                      <th style="width: 5%">
                          Stt
                      </th>
                      <th style="width: 20%">
                          Chức vụ
                      </th>
                      <th style="width: 30%">
                          Tên người dùng
                      </th>
                      <th style="width: 15%" class="text-center">
                          Trạng thái
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          <a>
                              Admin
                          </a>                     
                      </td>
                      <td>                   
                        <a>
                              Duy Linh
                          </a>  
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Đang sử dụng</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="AdminController.php?act=themtaikhoan">
                              <i class="fas fa-folder">
                              </i>
                              Thêm
                          </a>
                          <a class="btn btn-info btn-sm" href="AdminController.php?act=suataikhoan">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoataikhoan">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                      </td>
                  </tr>


              </tbody>
          </table>            