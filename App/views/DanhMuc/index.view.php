<?php
?>
<h1>Danh sách Danh Mục</h1>
<a href="/danhmuc/create">Thêm danh mục mới</a>
<form action=""></form>
<table>
    <thead>
        <tr>
            <th>Mã DM</th>
            <th>Tên DM</th>
            <th>Ngày Tạo</th>
            <th>Mô Tả</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($danhMucs as $danhMuc) : ?>
        <tr>
            <td><?php echo $danhMuc->MaDM; ?></td>
            <td><?php echo $danhMuc->TenDM; ?></td>
            <td><?php echo $danhMuc->NgayTao; ?></td>
            <td><?php echo $danhMuc->MoTa; ?></td>
            <td>
                <a href="/danhmuc/update/<?= $danhMuc->MaDM ?>">Sửa</a>
                <a href="/danhmuc/delete/<?= $danhMuc->MaDM ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
