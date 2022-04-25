<?php
require 'kDep.php';

$ent = new kDep();
include 'v_kDep.php';

if(isset($_GET['act'])){
    $a = $_GET['act'];
    if($a == 'add'){
        include 'v_add.html';
        if(isset($_POST['noProker']) and isset($_POST['namaProker']) and isset($_POST['suratKet'])){
            $ent->tambahProker($_POST['noProker'], $_POST['namaProker'], $_POST['suratKet']);
            header('Location: c_kDep.php');
        }
    }
    elseif($a == 'update'){
        include 'v_update.html';
        if(isset($_POST['upNo']) and isset($_POST['newNo']) and isset($_POST['newName']) and isset($_POST['newLet'])){
            if($ent->cariProgramKerja($_POST['upNo'])!=null){
                $ent->updateProker($_POST['upNo'], $_POST['newNo'], $_POST['newName'], $_POST['newLet']);
            }
            header('Location:c_kDep.php');
        }
    }
    elseif($a == 'delete'){
        include 'v_delete.html';
        if(isset($_POST['hapusNo'])){
            $ent->hapusProker($_POST['hapusNo']);
            header('Location: c_kDep.php');
        }
    }
    else{
        include 'v_search.html';
        if(isset($_POST['cariNo'])){
            if($ent->cariProgramKerja($_POST['cariNo'])!=null){
                $res = $ent->cariProgramKerja($_POST['cariNo']);
                include 'result.php';
            }
        }

    }
}