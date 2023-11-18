<h2>Danh sách quản lý hệ thống:</h2>
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
    <option value="">Banner</option>
    <option value="">Logo</option>
    <option value="">Ảnh sản phẩm</option>

</select>
<button type="button" class="btn btn-outline-danger">Tìm kiếm</button>
</div>

</div>
    <table class="table table-striped projects">
        <thead>
                <tr>
                      <th style="width: 1%">
                          Stt
                      </th>
                      <th style="width: 10%">
                          Tên ảnh
                      </th>
                      <th style="width: 30%">
                          Ảnh 
                      </th>            
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          <a>
                              Banner 2023
                          </a>                     
                      </td>
                      <td>                   
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                      </td>                
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="AdminController.php?act=themquanlyhethong">
                              <i class="fas fa-folder">
                              </i>
                              Thêm
                          </a>
                          <a class="btn btn-info btn-sm" href="AdminController.php?act=suaquanlyhethong">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoaquanlyhethong">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                      </td>
                  </tr>


              </tbody>
          </table>            