<?php
require 'menteri.php';
class kDep extends menteri{
    public function __construct(){
        $this->model = new m_proker();
    }
    public function tambahProker($nomorProgram, $namaProgram, $suratKeterangan){
        $this->model->addProgramKerja($nomorProgram, $namaProgram, $suratKeterangan);
    }
    public function hapusProker($id){
        $this->model->deletProgramKerja($id);
    }
    public function cariProgramKerja($id){
        return $this->model->findProgramKerjaById($id);
    }
    public function updateProker($id, $newId, $newName, $newLetter){
        $this->model->updateProgramKerja($id, $newId, $newName, $newLetter);
    }
}