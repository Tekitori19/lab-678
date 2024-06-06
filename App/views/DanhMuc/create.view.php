<h1>Thêm mới Danh Mục</h1>
<form action="/danhmuc/create" method="post">
    <div>
        <label for="tenDM">Tên Danh Mục</label>
        <input type="text" name="tenDM" require>
    </div>
    <div>
        <label for="moTa">Mô tả</label>
        <input type="text" name="moTa" require>
    </div>
    <div>
        <label for="maTK">Mã TK</label>
        <input type="number" name="maTK" require>
    </div>
    <div>
        <button type="submit">Gửi</button>
    </div>
</form>