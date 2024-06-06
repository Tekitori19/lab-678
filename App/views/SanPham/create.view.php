<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm Mới</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Thêm Sản Phẩm Mới</h1>
        <form action="/sanpham/create" method="post" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label for="MaSP" class="block text-sm font-medium text-gray-700">Mã Sản Phẩm</label>
                <input type="text" id="MaSP" name="MaSP" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="TenSP" class="block text-sm font-medium text-gray-700">Tên Sản Phẩm</label>
                <input type="text" id="TenSP" name="TenSP" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="HinhAnh" class="block text-sm font-medium text-gray-700">Hình Ảnh</label>
                <input type="file" id="HinhAnh" name="HinhAnh" class="mt-1 block w-full text-gray-900">
            </div>
            <div>
                <label for="DonGia" class="block text-sm font-medium text-gray-700">Đơn Giá</label>
                <input type="number" id="DonGia" name="DonGia" step="0.01" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="MoTa" class="block text-sm font-medium text-gray-700">Mô Tả</label>
                <textarea id="MoTa" name="MoTa" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <div>
                <label for="MaDM" class="block text-sm font-medium text-gray-700">Mã Danh Mục</label>
                <input type="number" id="MaDM" name="MaDM" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="MaTK" class="block text-sm font-medium text-gray-700">Mã Tài Khoản</label>
                <input type="number" id="MaTK" name="MaTK" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="text-center">
                <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Thêm sản phẩm
                </button>
            </div>
        </form>
    </div>
</body>
</html>



<!-- 
<h1>Thêm Sản Phẩm Mới</h1>
<form action="/sanpham/create" method="post" enctype="multipart/form-data">
    <label for="MaSP">Mã Sản Phẩm:</label><br>
    <input type="text" id="MaSP" name="MaSP" required><br><br>

    <label for="TenSP">Tên Sản Phẩm:</label><br>
    <input type="text" id="TenSP" name="TenSP" required><br><br>

    <label for="HinhAnh">Hình Ảnh:</label><br>
    <input type="file" id="HinhAnh" name="HinhAnh"><br><br>

    <label for="DonGia">Đơn Giá:</label><br>
    <input type="number" id="DonGia" name="DonGia" step="0.01"><br><br>

    <label for="MoTa">Mô Tả:</label><br>
    <textarea id="MoTa" name="MoTa"></textarea><br><br>

    <label for="MaDM">Mã Danh Mục:</label><br>
    <input type="number" id="MaDM" name="MaDM"><br><br>

    <label for="MaTK">Mã Tài Khoản:</label><br>
    <input type="number" id="MaTK" name="MaTK"><br><br>

    <button type="submit">Thêm sản phẩm</button>
</form> -->