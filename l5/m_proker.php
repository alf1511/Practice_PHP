<?php
require "koneksiMVC.php";
class m_proker {
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();
    public function addProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {//create
        global $mysqli;
        $rs = $mysqli->query("INSERT INTO proker VALUES ('$nomorProgram',
        '$namaProgram', '$suratKeterangan')");
    }
    public function findProgramKerjaById($id){//read
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker WHERE nomorProgram = '$id'");
        $result = $rs->fetch_assoc();
        return $result;
    }
    public function updateProgramKerja($id, $newId, $newName, $newLetter){//update
        global $mysqli;
        $rs = $mysqli->query("UPDATE proker SET nomorProgram='$newId', namaProgram='$newName', suratKeterangan='$newLetter' WHERE nomorProgram='$id'");
    }
    public function deletProgramKerja($id){//delete
        global $mysqli;
        $rs = $mysqli->query("DELETE FROM proker WHERE nomorProgram='$id'");
    }
    public function getSemuaPogramKerja() {//read
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker");
        $rows = array();
        while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil[] = $rows;
        return $this->hasil;
    }
}