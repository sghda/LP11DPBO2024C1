<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");
include("view/FormPasien.php");


$tp = new TampilPasien();
$form = new FormPasien();

if (isset($_GET['aksi']) && $_GET['aksi'] == 'tambah') {
    $form->add_form();
}
else if (!empty($_GET['id_hapus'])){
    $form->delete($_GET['id_hapus']);
}
else if(!empty($_GET['id_edit'])){
    $data = $form->edit_form($_GET['id_edit']);
}
else{
    $data = $tp->tampil();
}