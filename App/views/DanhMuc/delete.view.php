<h1>Xóa Danh Mục Danh Mục</h1>
<p><?php echo $danhmuc->MaDM; ?></p>
<p><?php echo $danhmuc->TenDM; ?></p>
<p><?php echo $danhmuc->NgayTao; ?></p>
<p><?php echo $danhmuc->MoTa; ?></p>

<form action="/danhmuc/delete/<?= $danhmuc->MaDM?>" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <p>Bạn có Chắc muốn xóa?</p>
    <div>
        <button type="submit">Có</button>
    </div>
    <div>
        <a href="/danhmuc">Không</a>
    </div>
</form>