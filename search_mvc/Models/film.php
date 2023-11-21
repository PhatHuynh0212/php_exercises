<?php
class Film {
    private $id;
    private $ten;
    private $danh_gia;
    private $anh;
    private $the_loai;

    public function __construct($id, $ten, $danh_gia, $anh, $the_loai) {
        $this->id = $id;
        $this->ten = $ten;
        $this->danh_gia = $danh_gia;
        $this->anh = $anh;
        $this->the_loai = $the_loai;
    }

    public function getId() {
        return $this->id;
    }

    public function getTen() {
        return $this->ten;
    }

    public function getDanhGia() {
        return $this->danh_gia;
    }

    public function getAnh() {
        return $this->anh;
    }

    public function getTheLoai() {
        return $this->the_loai;
    }
}
?>
