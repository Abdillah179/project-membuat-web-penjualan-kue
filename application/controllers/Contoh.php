<?php 
class Contoh extends CI_Controller {

    public function index() {

        $data["Contoh_Login"] = "Halaman Contoh Login";
        $this->load->view("login-v2", $data);
    }
}

?>