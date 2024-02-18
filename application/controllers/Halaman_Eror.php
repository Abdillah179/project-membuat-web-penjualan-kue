<?php 
class Halaman_Eror extends CI_Controller {

    public function index() {

        $data["judul"] = "Halaman Eror";
        $this->load->view("Halaman_Eror", $data);
    }
}
