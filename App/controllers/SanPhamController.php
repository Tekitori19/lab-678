<?php

namespace App\Controllers;
use App\Models\SanPham;

class SanPhamController {
    protected $model;

    public function __construct() {
        $this->model = new SanPham();
    }

    function index() {
        $sanPhams = $this->model->getAll(); 
        loadView('SanPham\index', ['sanPhams' => $sanPhams]);
    }

    function view_create() {
        loadView('SanPham\create');
    }

    function create() {

        if (isset($_FILES['HinhAnh'])) {
            $picture = $_FILES['HinhAnh'];
            $path = __DIR__ . '/uploadFiles';
            if (!is_dir($path))
                mkdir($path);
            // Hàm di chuyển file
            if (move_uploaded_file($picture['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/uploadFiles/' . $picture['name'])) {
                echo 'Upload file thành công!';
                $MaSP = $_POST['MaSP'];
                $TenSP = $_POST['TenSP'];
                $HinhAnh = $_FILES['HinhAnh']['name'];
                $DonGia = $_POST['DonGia'];
                $MoTa = $_POST['MoTa'];
                $MaDM = $_POST['MaDM'];
                $MaTK = $_POST['MaTK'];
                $this->model->insert($MaSP, $TenSP, $HinhAnh, $DonGia, $MoTa, $MaDM, $MaTK);
                header("Location: /sanpham");
            } else {
                echo 'Upload file không thành công!';
            }
        }
    }

    function view_update($params) {
        $id = $params['id'];
        $data = $this->model->getOne($id);
        loadView('SanPham\update', ['sanpham' => $data]);
    }

    function update($params) {
        $id = $params['id'];
        $TenSP = $_POST['TenSP'];
        $DonGia = $_POST['DonGia'];
        $MoTa = $_POST['MoTa'];
        $MaDM = $_POST['MaDM'];
        $MaTK = $_POST['MaTK'];
        if (isset($_FILES['HinhAnh'])) {
            $picture = $_FILES['HinhAnh'];
            $path = __DIR__ . '/uploadFiles';
            if (!is_dir($path))
                mkdir($path);
            // Hàm di chuyển file
            if (move_uploaded_file($picture['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/uploadFiles/' . $picture['name'])) {
                echo 'Upload file thành công!';
                
                $HinhAnh = $_FILES['HinhAnh']['name'];
                $this->model->update($id, $TenSP, $HinhAnh, $DonGia, $MoTa, $MaDM, $MaTK);
            } else {
                $this->model->updateWithOutIMG($id, $TenSP, $DonGia, $MoTa, $MaDM, $MaTK);
                echo 'Upload file không thành công!';
            }
            header("Location: /sanpham");
        }
    }

    function view_delete($params) {
        $id = $params['id'];
        $data = $this->model->getOne($id);
        loadView('SanPham\delete', ['sanpham' => $data]);
    }

    function delete($params) {
        $id = $params['id'];
        $this->model->delete($id);
        header("Location: /sanpham");
    }
}