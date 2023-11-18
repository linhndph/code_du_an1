<h2>Danh sách khuyến mãi:</h2>
<style>
    .timkiem {
        display: flex;

    }

    .timkiem1>input {
        padding: 5px 50px 5px 5px;
    }

    .timkiem1>button {
        padding: 5px 5px 5px 5px;

    }

    .timkiem1 {
        margin-left: 3px;
    }

    .timkiem2 {
        margin-left: 600px;
    }

    .timkiem2>select {
        padding: 6px 150px 6px 5px;
    }

    .timkiem2>button {
        padding: 5px 5px 5px 5px;

    }
</style>
<div class="timkiem">

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
            <th style="width: 1%">
                Stt
            </th>
            <th style="width: 10%">
                Tên sân
            </th>
            <th style="width: 10%">
                Tên khuyến mãi
            </th>
            <th style="width: 10%">
                Ngày bắt đầu
            </th>
            <th style="width: 10%">
                Ngày kết thúc
            </th>
            <th style="width: 15%" class="text-center">
                Giảm giá
            </th>
            <th style="width: 25%">
                Mô tả
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
                    Sân 2
                </a>
            </td>
            <td>
                #sanbong
            </td>
            <td>20/11/2023</td>
            <td class="project_progress">
                25/11/2023
            </td>
            <td class="project-state">
                20%
            </td>
            <td>
                chúc anh em có một buổi vui chơi thể thao vui vẻ
            </td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="AdminController.php?act=themkhuyenmai">
                    <i class="fas fa-folder">
                    </i>
                    Thêm
                </a>
                <a class="btn btn-info btn-sm" href="AdminController.php?act=suakhuyenmai">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Sửa
                </a>
                <a class="btn btn-danger btn-sm" href="AdminController.php?act=xoasan">
                    <i class="fas fa-trash">
                    </i>
                    Xóa
                </a>
            </td>
        </tr>


    </tbody>
</table>