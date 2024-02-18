<?php
class Model_Halaman_Pembeli extends CI_Model
{


    public function GetAllProduk($limit, $start)
    {

        return $this->db->get("tb_barang", $limit, $start)->result_array();
    }

    public function ViewCategory($id_kategori, $limit, $start)
    {
        $this->db->select("*");
        $this->db->from("tb_barang");
        $this->db->limit($limit, $start);
        $this->db->join("tb_kategori", "tb_kategori.id_kategori = tb_barang.id_kategori");
        $this->db->where("tb_barang.id_kategori", $id_kategori);
        return $this->db->get()->result_array();
    }

    public function GetCategory()
    {

        return $this->db->get("tb_kategori")->result_array();
    }

    public function GetBarang($id_barang)
    {

        return $this->db->get_where("tb_barang", ["id_barang" => $id_barang])->row_array();
    }

    public function JudulCategory($id_kategori)
    {

        return $this->db->get_where("tb_kategori", ["id_kategori" => $id_kategori])->row_array();
    }



    public function UpdateProfileUser()
    {

        $data = [
            'email' => $this->input->post("email"),
            'nama' => $this->input->post("nama"),
            'alamat' => $this->input->post("alamat"),
            'jenis_kelamin' => $this->input->post("jenis_kelamin"),
            'tempat_lahir' => $this->input->post("tempat_lahir"),
            'tanggal_lahir' => $this->input->post("tanggal_lahir"),
            'no_telepon' => $this->input->post("no_telepon"),
        ];

        $email = $this->input->post('email');

        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }


    // public function UpdateAlamatUser()
    // {
    //     $alamat = htmlspecialchars($this->input->post("alamat"));
    //     $email = htmlspecialchars($this->input->post('email'));



    //     $this->db->set('alamat', $alamat);
    //     $this->db->where('email', $email);
    //     $this->db->update('user');
    // }


    public function GetJumlahProduk()
    {

        return $this->db->get("tb_barang")->num_rows();
    }

    public function GetJumlahProdukCategory($id_kategori)
    {

        $this->db->select("*");
        $this->db->from("tb_barang");
        $this->db->join("tb_kategori", "tb_kategori.id_kategori = tb_barang.id_kategori");
        $this->db->where("tb_barang.id_kategori", $id_kategori);
        return $this->db->get()->num_rows();
    }

    public function GetDetailProduk($id_barang)
    {

        return $this->db->get_where("tb_barang", ["id_barang" => $id_barang])->row_array();
    }


    public function InsertTransaksi($data)
    {

        return $this->db->insert("tb_transaksi", $data);
    }

    public function InsertCart($data2)
    {

        return $this->db->insert("tb_rinci_transaksi", $data2);
    }


    public function BelumBayar()
    {

        return $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id"), "status_order" => 0])->result_array();
    }



    public function Diproses()
    {
        return $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id"), "status_order" => 1])->result_array();
    }

    public function Dikirim()
    {
        return $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id"), "status_order" => 2])->result_array();
    }

    public function Diterima()
    {
        return $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id"), "status_order" => 3])->result_array();
    }

    public function Dibatalkan()
    {
        return $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id"), "status_order" => 4])->result_array();
    }


    public function Pembayaran($blmbyr)
    {
        return $this->db->get_where("tb_transaksi", ["id_transaksi" => $blmbyr])->row_array();
    }

    public function FormPembayaran($pembayaran)
    {
        return $this->db->get_where("tb_transaksi", ["id_transaksi" => $pembayaran])->row_array();
    }

    public function GetDetailOrderPesanan($sdhbyr)
    {

        return $this->db->get_where("tb_transaksi", ["id_transaksi" => $sdhbyr])->row_array();
    }

    public function GetDetailOrderPesananBarang($sdhbyr)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["no_order" => $sdhbyr])->result_array();
    }

    public function GetDetailOrderPesananBarangg($sdhbyr)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["no_order" => $sdhbyr])->row_array();
    }

    public function GetDetailOrderPesananDiproses($dprs)
    {

        return $this->db->get_where("tb_transaksi", ["id_transaksi" => $dprs])->row_array();
    }

    public function GetDetailOrderPesananBarangDiproses($dprs)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["no_order" => $dprs])->result_array();
    }

    public function GetDetailOrderPesananBaranggDiproses($dprs)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["no_order" => $dprs])->row_array();
    }

    public function GetDetailOrderPesananDikirim($dkrm)
    {

        return $this->db->get_where("tb_transaksi", ["id_transaksi" => $dkrm])->row_array();
    }

    public function GetDetailOrderPesananBarangDikirim($dkrm)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["no_order" => $dkrm])->result_array();
    }

    public function GetDetailOrderPesananBaranggDikirim($dkrm)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["no_order" => $dkrm])->row_array();
    }


    public function Contact()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'email_pengirim' => $this->input->post('email_pengirim'),
            'no_handphone' => $this->input->post('no_handphone'),
            'pesan' => $this->input->post('pesan'),
            'tanggal_pengiriman' => date("Y-m-d H:i:s")
        ];

        $this->db->insert("contact", $data);
    }


    public function HapusOrderan($blmbyr)
    {
        $order = $this->db->get_where("tb_transaksi", ["id_transaksi" => $blmbyr])->row_array();

        $noorder = $order["no_order"];

        $this->db->where("no_order", $noorder);
        $this->db->delete("tb_rinci_transaksi");
    }
}
