<?php

namespace App\Models;
use Framework_Tu_Code\Database;

class DanhMuc {
    protected $db;
    
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function getAll() {
        return $this->db->query('SELECT * FROM danhmuc')->fetchAll();
    }

    public function getOne($id) {
        return $this->db->query('SELECT * FROM danhmuc WHERE MaDM = :id', ['id' => $id])->fetch();
    }

    public function insert($tenDM, $moTa, $maTK) {
        $this->db->query('INSERT INTO danhmuc (TenDM, MoTa, MaTK) VALUES (:tenDM, :moTa, :maTK)', 
        [
            'tenDM' => $tenDM, 
            'moTa' => $moTa,
            'maTK' => $maTK,
        ]);
    }

    public function update($id, $tenDM, $moTa, $maTK) {
        // $id = $params['id'] ?? '';
        $sql = "UPDATE danhmuc SET TenDM = :tenDM, MoTa = :moTa, MaTK = :maTK WHERE MaDM = :id";
        $params = [
            'tenDM' => $tenDM, 
            'moTa' => $moTa,
            'maTK' => $maTK,
            'id' => $id,
        ];
        $this->db->query($sql, $params);
    }

    public function delete($id) {
        // $id = $params['id'] ?? '';
        $sql = "DELETE FROM danhmuc WHERE MaDM = :id";
        $this->db->query($sql, ['id' => $id]);
    }
}