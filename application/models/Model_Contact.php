<?php 
class Model_Contact extends CI_Model {

    public function Contact() {

        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama_pengirim" => htmlspecialchars($this->input->post("nama_pengirim", true)),
            "email_pengirim" => htmlspecialchars($this->input->post("email_pengirim", true)),
            "no_handphone" => htmlspecialchars($this->input->post("no_handphone", true)),
            "pesan" => htmlspecialchars($this->input->post("pesan", true)),
            "tanggal_pengiriman" => date("Y-m-d H:i:s")
        ];

        $this->db->insert("contact", $data);
    }
}
?>