<?php

include_once("KontrakView.php");
include_once("presenter/ProsesPasien.php");

class FormPasien implements KontrakView {
    private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosespasien = new ProsesPasien();
	}

    function add_form(){
        $option_gender = null;
        $option_gender .= 
            "<option value='Perempuan'>Perempuan</option>
            <option value='Laki-laki'>Laki-laki</option>";

        $this->tpl = new Template("templates/form.html");
        $this->tpl->replace("TITLE", "Tambah Data Pasien");
        $this->tpl->replace("CRUD", "Tambah Data");
        $this->tpl->replace("VAL_ID", "");
        $this->tpl->replace("VAL_NIK", "");
        $this->tpl->replace("VAL_NAMA", "");
        $this->tpl->replace("VAL_TEMPAT", "");
        $this->tpl->replace("VAL_TL", "");
        $this->tpl->replace("VAL_EMAIL", "");
        $this->tpl->replace("VAL_TELP", "");
        $this->tpl->replace("VAL_GENDER", $option_gender);

        $this->tpl->write();
        if(isset($_POST['submit'])) {
            // Tangani proses penambahan data pasien
            $data = array(
                'nik' => $_POST['nik'],
                'nama' => $_POST['nama'],
                'tempat' => $_POST['tempat'],
                'tl' => $_POST['tl'],
                'gender' => $_POST['gender'],
                'email' => $_POST['email'],
                'telp' => $_POST['telp']
            );
            $result = $this->prosespasien->addPasien($data);
        }
    }
    
    function edit_form($id){
        $pasien = $this->prosespasien->getPasienById($id);
        $option_gender = "";
        if ($pasien) {
            // Mendapatkan nilai dari setiap kolom
            $id = $pasien->getId();
            $nik = $pasien->getNik();
            $nama = $pasien->getNama();
            $tempat = $pasien->getTempat();
            $tl = $pasien->getTl();
            $gender = $pasien->getGender();
            $email = $pasien->getEmail();
            $telp = $pasien->getTelp();

            $option_gender .= "<option value='Perempuan'";
            if ($gender == 'Perempuan') {
                $option_gender .= " selected";
            }
            $option_gender .= ">Perempuan</option>";
            
            $option_gender .= "<option value='Laki-laki'";
            if ($gender == 'Laki-laki' || empty($gender)) {
                $option_gender .= " selected";
            }
            $option_gender .= ">Laki-laki</option>";

        } else {
            echo "Data pasien tidak ditemukan.";
        }

        $this->tpl = new Template("templates/form.html");
        $this->tpl->replace("TITLE", "Edit Data Pasien");
        $this->tpl->replace("CRUD", "Edit Data");
        $this->tpl->replace("VAL_ID", $id);
        $this->tpl->replace("VAL_NIK", $nik);
        $this->tpl->replace("VAL_NAMA", $nama);
        $this->tpl->replace("VAL_TEMPAT", $tempat);
        $this->tpl->replace("VAL_TL", $tl);
        $this->tpl->replace("VAL_EMAIL", $email);
        $this->tpl->replace("VAL_TELP", $telp);
        $this->tpl->replace("VAL_GENDER", $option_gender);
    
        $this->tpl->write();
        if(isset($_POST['submit'])) {
            // Tangani proses penambahan data pasien
            $data = array(
                'id' => $_POST['id'],
                'nik' => $_POST['nik'],
                'nama' => $_POST['nama'],
                'tempat' => $_POST['tempat'],
                'tl' => $_POST['tl'],
                'gender' => $_POST['gender'],
                'email' => $_POST['email'],
                'telp' => $_POST['telp']
            );
            $result = $this->prosespasien->editPasien($data);
        }
    }

    function delete($id){
        if(isset($_GET['id_hapus'])) {
            $id = $_GET['id_hapus'];
            $result = $this->prosespasien->deletePasien($id);
        }
    }

    function tampil(){
    }
}

?>