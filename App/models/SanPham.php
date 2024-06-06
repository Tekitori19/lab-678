<?php

namespace App\Models;
use Framework_Tu_Code\Database;

class SanPham {
    protected $db;
    
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function getAll() {
        return $this->db->query('SELECT * FROM sanpham')->fetchAll();
    }

    public function getOne($id) {
        return $this->db->query('SELECT * FROM sanpham WHERE MaSP = :id', ['id' => $id])->fetch();
    }

    public function insert($MaSP, $TenSP, $HinhAnh, $DonGia, $MoTa, $MaDM, $MaTK) {
        $this->db->query('INSERT INTO sanpham (MaSP, TenSP, HinhAnh, DonGia, MoTa, MaDM, MaTK) VALUES (:MaSP, :TenSP, :HinhAnh, :DonGia, :MoTa, :MaDM, :MaTK)', 
        [
            'MaSP' => $MaSP,
            'TenSP' => $TenSP, 
            'HinhAnh' => $HinhAnh, 
            'DonGia' => $DonGia, 
            'MoTa' => $MoTa, 
            'MaDM' => $MaDM, 
            'MaTK' => $MaTK
        ]);
    }

    public function update($MaSP, $TenSP, $HinhAnh, $DonGia, $MoTa, $MaDM, $MaTK) {
        $sql = "UPDATE sanpham SET TenSP = :TenSP, HinhAnh = :HinhAnh, DonGia = :DonGia, MoTa = :MoTa, MaDM = :MaDM, MaTK = :MaTK  WHERE MaSP = :MaSP";
        $params = [
            'TenSP' => $TenSP, 
            'HinhAnh' => $HinhAnh, 
            'DonGia' => $DonGia, 
            'MoTa' => $MoTa, 
            'MaDM' => $MaDM, 
            'MaTK' => $MaTK,
            'MaSP' => $MaSP,
        ];
        $this->db->query($sql, $params);
    }

    public function updateWithOutIMG($MaSP, $TenSP, $DonGia, $MoTa, $MaDM, $MaTK) {
        $sql = "UPDATE sanpham SET TenSP = :TenSP, DonGia = :DonGia, MoTa = :MoTa, MaDM = :MaDM, MaTK = :MaTK  WHERE MaSP = :MaSP";
        $params = [
            'TenSP' => $TenSP, 
            'DonGia' => $DonGia, 
            'MoTa' => $MoTa, 
            'MaDM' => $MaDM, 
            'MaTK' => $MaTK,
            'MaSP' => $MaSP,
        ];
        $this->db->query($sql, $params);
    }

    public function delete($id) {
        // $id = $params['id'] ?? '';
        $sql = "DELETE FROM sanpham WHERE MaSP = :id";
        $this->db->query($sql, ['id' => $id]);
    }
}