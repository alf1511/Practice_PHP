<?php
include 'm_proker.php';
class menteri {
    protected $model;
    public function __construct(){
        $this->model = new m_proker();
    }
    public function lihatProgramKerja(){
        return $this->model->getSemuaPogramKerja();
    }
}