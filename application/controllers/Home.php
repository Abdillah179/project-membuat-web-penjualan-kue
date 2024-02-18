<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata("email") && $this->session->userdata("role_id") == 2) {
            redirect("Halaman_Pembeli");
        } else {
            if ($this->session->userdata("email") && $this->session->userdata("role_id") == 1) {
                redirect("Halaman_Admin");
            }
        }
        if ($this->session->userdata("email") && $this->session->userdata("role_id") == 0) {
            redirect("Halaman_Admin");
        }
    }


    public function index()
    {

        $data["judul"] = "Halaman Beranda";
        $this->load->view("Home", $data);
    }

    public function Contact()
    {

        $this->form_validation->set_rules("nama_pengirim", "NAMA", "required", [
            "required" => "Field Nama Pengirim Harus Diisi"
        ]);

        $this->form_validation->set_rules("email_pengirim", "EMAIL", "required|valid_email|trim", [
            "required" => "Field Email Harus Diisi",
            "valid_email" => "Email Tidak Valid"
        ]);

        $this->form_validation->set_rules("no_handphone", "NO HANDPHONE", "required|integer", [
            "required" => "Field No Handphone Harus Diisi",
            "integer" => "Field No Hanphone Hanya Boleh Diisi Oleh Angka Atau Bilangan"
        ]);

        $this->form_validation->set_rules("pesan", "PESAN", "required", [
            "required" => "Field Pesan Harus Diisi"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Beranda";
            $this->load->view("Home", $data);
        } else {
            $this->Model_Contact->Contact();
            $this->session->set_flashdata("kontakk", "DIKIRIMKAN");
            redirect("Home/index");
        }
    }



    public function error()
    {

        $this->load->view("Halaman_eror");
    }
}
