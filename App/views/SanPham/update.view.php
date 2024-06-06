<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Cập nhật Sản Phẩm</h1>
        <form action="/sanpham/update/<?= $sanpham->MaSP ?>" method="post" enctype="multipart/form-data" class="space-y-4">
            <input type="hidden" name="_method" value="PUT">
            <div>
                <p class="text-gray-700 font-semibold"><?= $sanpham->MaSP ?></p>
            </div>
            <div>
                <label for="TenSP" class="block text-sm font-medium text-gray-700">Tên Sản Phẩm</label>
                <input type="text" id="TenSP" name="TenSP" value="<?= $sanpham->TenSP ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="HinhAnh" class="block text-sm font-medium text-gray-700">Hình Ảnh</label>
                <input type="file" id="HinhAnh" name="HinhAnh" class="mt-1 block w-full text-gray-900">
                <img src="/uploadFiles/<?= $sanpham->HinhAnh ?>" alt="Hình Ảnh Sản Phẩm" class="mt-2 w-full h-auto">
            </div>
            <div>
                <label for="DonGia" class="block text-sm font-medium text-gray-700">Đơn Giá</label>
                <input type="number" id="DonGia" name="DonGia" value="<?= $sanpham->DonGia ?>" step="0.01" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="MoTa" class="block text-sm font-medium text-gray-700">Mô Tả</label>
                <textarea id="MoTa" name="MoTa" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"><?= $sanpham->MoTa ?></textarea>
            </div>
            <div>
                <label for="MaDM" class="block text-sm font-medium text-gray-700">Mã Danh Mục</label>
                <input type="number" id="MaDM" name="MaDM" value="<?= $sanpham->MaDM ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="MaTK" class="block text-sm font-medium text-gray-700">Mã Tài Khoản</label>
                <input type="number" id="MaTK" name="MaTK" value="<?= $sanpham->MaTK ?>" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="text-center">
                <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cập nhật sản phẩm
                </button>
            </div>
        </form>
    </div>
</body>
</html>
