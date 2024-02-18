<?php 
class Login extends CI_Controller {

    public function index() {

        $data["judul"] = "Contoh Halaman Login";
        $this->load->view("login", $data);
    }
}

?>