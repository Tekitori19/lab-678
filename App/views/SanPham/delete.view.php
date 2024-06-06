<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-red-600">Xóa Sản Phẩm</h1>
        <div class="space-y-4">
            <p class="text-gray-700 font-semibold"><?= $sanpham->MaSP ?></p>
            <div>
                <label for="TenSP" class="block text-sm font-medium text-gray-700">Tên Sản Phẩm</label>
                <input type="text" id="TenSP" name="TenSP" value="<?= $sanpham->TenSP ?>" disabled class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-100">
            </div>
            <div>
                <label for="HinhAnh" class="block text-sm font-medium text-gray-700">Hình Ảnh</label>
                <img src="/uploadFiles/<?= $sanpham->HinhAnh ?>" alt="Hình Ảnh Sản Phẩm" class="mt-2 w-full h-auto">
            </div>
            <div>
                <label for="DonGia" class="block text-sm font-medium text-gray-700">Đơn Giá</label>
                <input type="number" id="DonGia" name="DonGia" value="<?= $sanpham->DonGia ?>" step="0.01" disabled class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-100">
            </div>
            <div>
                <label for="MoTa" class="block text-sm font-medium text-gray-700">Mô Tả</label>
                <textarea id="MoTa" name="MoTa" disabled class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-100"><?= $sanpham->MoTa ?></textarea>
            </div>
            <div>
                <label for="MaDM" class="block text-sm font-medium text-gray-700">Mã Danh Mục</label>
                <input type="number" id="MaDM" name="MaDM" value="<?= $sanpham->MaDM ?>" disabled class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-100">
            </div>
            <div>
                <label for="MaTK" class="block text-sm font-medium text-gray-700">Mã Tài Khoản</label>
                <input type="number" id="MaTK" name="MaTK" value="<?= $sanpham->MaTK ?>" disabled class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm bg-gray-100">
            </div>
        </div>
        <form action="/sanpham/delete/<?= $sanpham->MaSP ?>" method="post" class="mt-6">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Nhấn để xóa
            </button>
        </form>
    </div>
</body>
</html>
