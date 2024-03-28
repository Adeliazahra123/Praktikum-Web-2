<?php

class FormNilaiUjian {
    public $nim;
    public $mata_kuliah;
    public $data_warehouse;
    public $nilai;
    public $status;

    public function __construct($nim, $mata_kuliah, $data_warehouse, $nilai){
        $this->nim = $nim;
        $this->mata_kuliah = $mata_kuliah;
        $this->data_warehouse = $data_warehouse;
        $this->nilai = $nilai;
        $this->status = $this->hitungStatus();
    }

    public function hitungStatus() {
        return $this->nilai > 56 ? "Lulus" : "Tidak Lulus";
    }
}


?>
