<?php
class Halaman_Tutup extends CI_Controller
{

    public function index()
    {

        $data["judul"] = "Halaman Toko Tutup";
        $this->load->view("Halaman_Tutup", $data);
    }
}
