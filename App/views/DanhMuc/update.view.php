<h1>Cập nhật Danh Mục</h1>
<form action="/danhmuc/update/<?= $danhmuc->MaDM?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="tenDM">Tên Danh Mục</label>
        <input type="text" name="tenDM" require value="<?= $danhmuc->TenDM?>">
    </div>
    <div>
        <label for="moTa">Mô tả</label>
        <input type="text" name="moTa" require value="<?= $danhmuc->MoTa?>">
    </div>
    <div>
        <label for="maTK">Mã TK</label>
        <input type="number" name="maTK" require value="<?= $danhmuc->MaTK?>">
    </div>
    <div>
        <button type="submit">Gửi</button>
    </div>
</form>