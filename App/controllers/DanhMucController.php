<?php

namespace App\Controllers;
use App\Models\DanhMuc;

class DanhMucController {
    protected $model;

    public function __construct() {
        $this->model = new DanhMuc();
    }

    function index() {
        $danhMucs = $this->model->getAll(); 
        loadView('DanhMuc\index', ['danhMucs' => $danhMucs]);
    }

    function view_create() {
        loadView('DanhMuc\create');
    }

    function create() {
        $tenDM = $_POST['tenDM'] ?? '';
        $moTa = $_POST['moTa'] ?? '';
        $maTK = $_POST['maTK'] ?? 1;
        $this->model->insert($tenDM, $moTa, $maTK);
        header("Location: /danhmuc");
    }

    function view_update($params) {
        $id = $params['id'];
        $data = $this->model->getOne($id);
        loadView('DanhMuc\update', ['danhmuc' => $data]);
    }

    function update($params) {
        $id = $params['id'];
        $tenDM = $_POST['tenDM'] ?? '';
        $moTa = $_POST['moTa'] ?? '';
        $maTK = $_POST['maTK'] ?? 1;
        $this->model->update($id, $tenDM, $moTa, $maTK);
        header("Location: /danhmuc");
    }

    function view_delete($params) {
        $id = $params['id'];
        $data = $this->model->getOne($id);
        loadView('DanhMuc\delete', ['danhmuc' => $data]);
    }

    function delete($params) {
        $id = $params['id'];
        $this->model->delete($id);
        header("Location: /danhmuc");
    }
}