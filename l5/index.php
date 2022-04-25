<?php
include 'login.html';

if(isset($_POST['occup'])){
    if($_POST['occup']=='Menteri'){
        header('Location: c_menteri.php');
    }
    else{
        header('Location: c_kDep.php');
    }
}