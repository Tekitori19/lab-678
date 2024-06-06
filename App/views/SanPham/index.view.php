<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Danh sách Sản Phẩm</h1>
        <div class="text-right mb-4">
            <a href="/sanpham/create" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Thêm sản phẩm mới</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Mã SP</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Tên SP</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Hình Ảnh</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Đơn Giá</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Ngày Tạo</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Mô Tả</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Danh Mục</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-medium text-gray-700">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sanPhams as $sanPham) : ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b text-sm text-gray-700"><?php echo $sanPham->MaSP; ?></td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700"><?php echo $sanPham->TenSP; ?></td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700">
                            <img src="/uploadFiles/<?php echo $sanPham->HinhAnh; ?>" class="w-20 h-auto" alt="<?php echo $sanPham->TenSP; ?>">
                        </td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700"><?php echo $sanPham->DonGia; ?></td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700"><?php echo $sanPham->NgayTao; ?></td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700"><?php echo $sanPham->MoTa; ?></td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700"><?php echo $sanPham->MaDM; ?></td>
                        <td class="px-4 py-2 border-b text-sm text-gray-700">
                            <a href="/sanpham/update/<?php echo $sanPham->MaSP; ?>" class="text-indigo-600 hover:text-indigo-900">Sửa</a> |
                            <a href="/sanpham/delete/<?php echo $sanPham->MaSP; ?>" class="text-red-600 hover:text-red-900">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>