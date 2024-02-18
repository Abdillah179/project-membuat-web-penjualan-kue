<?php
class Model_Halaman_Admin extends CI_Model
{

    public function JumlahDataBarang()
    {

        return $this->db->get("tb_barang")->num_rows();
    }

    public function JumlahKategoriBarang()
    {

        return $this->db->get("tb_kategori")->num_rows();
    }

    public function JumlahDataTransaksi()
    {

        return $this->db->get("tb_transaksi")->num_rows();
    }

    public function JumlahRincianTransaksi()
    {

        return $this->db->get("tb_rinci_transaksi")->num_rows();
    }

    public function JumlahUserPembeli()
    {
        return $this->db->get("user")->num_rows();
    }

    public function JumlahUserAdmin()
    {
        return $this->db->get("user_admin")->num_rows();
    }

    public function JumlahDataRekeningToko()
    {
        return $this->db->get("rekening")->num_rows();
    }

    public function JumlahDataPesan()
    {
        return $this->db->get("contact")->num_rows();
    }

    public function GetDataBarang($pencarian)
    {
        if ($pencarian) {

            $this->db->like("nama_barang", $pencarian);
            $this->db->or_like("keterangan_barang", $pencarian);
            $this->db->or_like("kategori_barang", $pencarian);
            $this->db->or_like("id_kategori", $pencarian);
            $this->db->or_like("harga_barang", $pencarian);
            $this->db->or_like("berat", $pencarian);
            $this->db->or_like("stok", $pencarian);
            $this->db->or_like("gambar", $pencarian);
        }
        return $this->db->get("tb_barang")->result_array();
    }

    public function DeleteOneData($dtbrg)
    {
        $this->db->where("id_barang", $dtbrg);
        $this->db->delete("tb_barang");
    }

    public function GetDetailDataBarang($dtbrg)
    {
        return $this->db->get_where("tb_barang", ["id_barang" => $dtbrg])->row_array();
    }

    public function EditDataBarang()
    {
        $config['upload_path'] = './public/image/fotoproduk/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '9000';

        $this->upload->initialize($config);

        $field_name = 'gambar';
        if (!$this->upload->do_upload($field_name)) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = [
                'upload' => $this->upload->data()
            ];
            $config['image_library'] = 'gd2';
            $config['source_image'] = './public/image/fotoproduk' . $upload_data['upload']['file_name'];
            $this->load->library('image_lib', $config);
        }

        $image = $upload_data['upload']['file_name'];

        $data = [
            "nama_barang" => $this->input->post("nama_barang"),
            "keterangan_barang" => $this->input->post("keterangan_barang"),
            "kategori_barang" => $this->input->post("kategori_barang"),
            "id_kategori" => $this->input->post("id_kategori"),
            "harga_barang" => $this->input->post("harga_barang"),
            "berat" => $this->input->post("berat"),
            "stok" => $this->input->post("stok"),
            "gambar" => $image,
        ];

        $this->db->where("id_barang", $this->input->post("id_barang"));
        $this->db->update("tb_barang", $data);
    }

    public function UpdateProfileAdmin()
    {
        $email = $this->input->post("email");
        $nama = $this->input->post("nama");
        $alamat = $this->input->post("alamat");
        $jenis_kelamin = $this->input->post("jenis_kelamin");
        $tempat_lahir = $this->input->post("tempat_lahir");
        $tanggal_lahir = $this->input->post("tanggal_lahir");
        $no_telepon = $this->input->post("no_telepon");

        $this->db->set("nama", $nama);
        $this->db->set("alamat", $alamat);
        $this->db->set("jenis_kelamin", $jenis_kelamin);
        $this->db->set("tempat_lahir", $tempat_lahir);
        $this->db->set("tanggal_lahir", $tanggal_lahir);
        $this->db->set("no_telepon", $no_telepon);
        $this->db->where("email", $email);
        $this->db->update("user_admin");
    }

    public function GetKategoriBarang($pencarian)
    {

        if ($pencarian) {
            $this->db->like("nama_kategori", $pencarian);
            $this->db->or_like("id_kategori", $pencarian);
        }
        return $this->db->get("tb_kategori")->result_array();
    }

    public function TambahKategoriBarang()
    {
        return $this->db->get("tb_kategori")->result_array();
    }

    public function HapusKategoriBarang($dtktgbrg)
    {
        $this->db->where("id_kategori", $dtktgbrg);
        $this->db->delete("tb_kategori");
    }

    public function TambahDataBarang()
    {
        $config['upload_path'] = './public/image/fotoproduk/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '9000';

        $this->upload->initialize($config);

        $field_name = 'gambar';
        if (!$this->upload->do_upload($field_name)) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = [
                'upload' => $this->upload->data()
            ];
            $config['image_library'] = 'gd2';
            $config['source_image'] = './public/image/fotoproduk' . $upload_data['upload']['file_name'];
            $this->load->library('image_lib', $config);
        }

        $image = $upload_data['upload']['file_name'];

        $data = [
            "nama_barang" => $this->input->post("nama_barang"),
            "keterangan_barang" => $this->input->post("keterangan_barang"),
            "kategori_barang" => $this->input->post("kategori_barang"),
            "id_kategori" => $this->input->post("id_kategori"),
            "harga_barang" => $this->input->post("harga_barang"),
            "berat" => $this->input->post("berat"),
            "stok" => $this->input->post("stok"),
            "gambar" => $image
        ];

        $this->db->insert("tb_barang", $data);
    }

    public function GetDetailKategori($dtktgbrg)
    {
        return $this->db->get_where("tb_kategori", ["id_kategori" => $dtktgbrg])->row_array();
    }

    public function GetDataTransaksi($pencarian)
    {
        if ($pencarian) {

            $this->db->like("id_transaksi", $pencarian);
            $this->db->or_like("id_pembeli", $pencarian);
            $this->db->or_like("no_order", $pencarian);
            $this->db->or_like("tgl_order", $pencarian);
            $this->db->or_like("nama_alamat", $pencarian);
            $this->db->or_like("nama_penerima", $pencarian);
            $this->db->or_like("no_handphone_penerima", $pencarian);
            $this->db->or_like("alamat_lengkap_penerima", $pencarian);
            $this->db->or_like("kecamatan", $pencarian);
            $this->db->or_like("kode_pos", $pencarian);
            $this->db->or_like("kota", $pencarian);
            $this->db->or_like("provinsi", $pencarian);
            $this->db->or_like("berat_total", $pencarian);
            $this->db->or_like("total_bayar", $pencarian);
            $this->db->or_like("status_bayar", $pencarian);
            $this->db->or_like("bukti_bayar", $pencarian);
            $this->db->or_like("atas_nama", $pencarian);
            $this->db->or_like("nama_bank", $pencarian);
            $this->db->or_like("no_rek", $pencarian);
            $this->db->or_like("status_order", $pencarian);
            $this->db->or_like("bukti_diterima", $pencarian);
            $this->db->or_like("penilaian_barang", $pencarian);
        }
        return $this->db->get("tb_transaksi")->result_array();
    }

    public function GetDetailDataTransaksi($dttsi)
    {
        return $this->db->get_where("tb_transaksi", ["id_transaksi" => $dttsi])->row_array();
    }

    public function EditDataTransaksi()
    {
        $data = [
            "no_order" => $this->input->post("no_order"),
            "tgl_order" => $this->input->post("tgl_order"),
            "nama_alamat" => $this->input->post("nama_alamat"),
            "nama_penerima" => $this->input->post("nama_penerima"),
            "no_handphone_penerima" => $this->input->post("no_handphone_penerima"),
            "alamat_lengkap_penerima" => $this->input->post("alamat_lengkap_penerima"),
            "kecamatan" => $this->input->post("kecamatan"),
            "kode_pos" => $this->input->post("kode_pos"),
            "kota" => $this->input->post("kota"),
            "provinsi" => $this->input->post("provinsi"),
            "berat_total" => $this->input->post("berat_total"),
            "total_bayar" => $this->input->post("total_bayar"),
            "status_bayar" => $this->input->post("status_bayar"),
            "atas_nama" => $this->input->post("atas_nama"),
            "nama_bank" => $this->input->post("nama_bank"),
            "no_rek" => $this->input->post("no_rek"),
            "status_order" => $this->input->post("status_order"),
            "penilaian_barang" => $this->input->post("penilaian_barang"),
        ];

        $this->db->where("id_transaksi", $this->input->post("id_transaksi"));
        $this->db->update("tb_transaksi", $data);
    }


    public function GetPesananMasuk()
    {
        return $this->db->get_where("tb_transaksi", ["status_order" => 0])->result_array();
    }

    // public function GetSudahBayar()
    // {
    //     return $this->db->get_where("tb_transaksi", ["status_bayar" => 1, "status_order" => 0])->result_array();
    // }


    public function Diproses()
    {
        return $this->db->get_where("tb_transaksi", ["status_order" => 1])->result_array();
    }

    public function Dikirim()
    {
        return $this->db->get_where("tb_transaksi", ["status_order" => 2])->result_array();
    }

    public function Diterima()
    {
        return $this->db->get_where("tb_transaksi", ["status_order" => 3])->result_array();
    }


    public function Dibatalkan()
    {

        return $this->db->get_where("tb_transaksi", ["status_order" => 4])->result_array();
    }


    public function GetDataRinciTransaksi($pencarian)
    {
        if ($pencarian) {
            $this->db->like("id_rinci", $pencarian);
            $this->db->or_like("no_order", $pencarian);
            $this->db->or_like("id_barang", $pencarian);
            $this->db->or_like("gambar", $pencarian);
            $this->db->or_like("nama_barang", $pencarian);
            $this->db->or_like("harga_barang", $pencarian);
            $this->db->or_like("berat", $pencarian);
            $this->db->or_like("qty", $pencarian);
            $this->db->or_like("subtotal", $pencarian);
            $this->db->or_like("kategori_barang", $pencarian);
        }
        return $this->db->get("tb_rinci_transaksi")->result_array();
    }


    public function GetDetailRinciTransaksi($dtrctri)
    {
        return $this->db->get_where("tb_rinci_transaksi", ["id_rinci" => $dtrctri])->row_array();
    }


    public function GetDataRekeningToko($pencarian)
    {
        if ($pencarian) {
            $this->db->like("nama_bank", $pencarian);
            $this->db->or_like("atas_nama", $pencarian);
            $this->db->or_like("no_rek", $pencarian);
        }
        return $this->db->get("rekening")->result_array();
    }


    public function GetDataUserAdmin($pencarian)
    {
        if ($pencarian) {
            $this->db->like("id_admin", $pencarian);
            $this->db->or_like("nama", $pencarian);
            $this->db->or_like("alamat", $pencarian);
            $this->db->or_like("jenis_kelamin", $pencarian);
            $this->db->or_like("tempat_lahir", $pencarian);
            $this->db->or_like("tanggal_lahir", $pencarian);
            $this->db->or_like("no_telepon", $pencarian);
            $this->db->or_like("email", $pencarian);
            $this->db->or_like("password2", $pencarian);
            $this->db->or_like("role_id", $pencarian);
            $this->db->or_like("is_active", $pencarian);
            $this->db->or_like("date_created", $pencarian);
            $this->db->or_like("image", $pencarian);
        }
        return $this->db->get("user_admin")->result_array();
    }

    public function GetDataUserPembeli($pencarian)
    {
        if ($pencarian) {
            $this->db->like("id_pembeli", $pencarian);
            $this->db->or_like("nama", $pencarian);
            $this->db->or_like("alamat", $pencarian);
            $this->db->or_like("jenis_kelamin", $pencarian);
            $this->db->or_like("tempat_lahir", $pencarian);
            $this->db->or_like("tanggal_lahir", $pencarian);
            $this->db->or_like("no_telepon", $pencarian);
            $this->db->or_like("email", $pencarian);
            $this->db->or_like("password", $pencarian);
            $this->db->or_like("role_id", $pencarian);
            $this->db->or_like("is_active", $pencarian);
            $this->db->or_like("date_created", $pencarian);
            $this->db->or_like("image", $pencarian);
        }
        return $this->db->get("user")->result_array();
    }


    public function GetDataPesan($pencarian)
    {
        if ($pencarian) {

            $this->db->like("id", $pencarian);
            $this->db->or_like("nama_pengirim", $pencarian);
            $this->db->or_like("email_pengirim", $pencarian);
            $this->db->or_like("no_handphone", $pencarian);
            $this->db->or_like("pesan", $pencarian);
            $this->db->or_like("tanggal_pengiriman", $pencarian);
        }
        return $this->db->get("contact")->result_array();
    }
}
