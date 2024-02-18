<?php
class Halaman_Admin extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata("email")) {
            redirect("Home/index");
        } else {
            if ($this->session->userdata("role_id") != 1) {
                redirect("Halaman_Eror");
            }
        }
    }

    public function index()
    {

        $data["judul"] = "Halaman Dashboard";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["jumlahdatabarang"] = $this->Model_Halaman_Admin->JumlahDataBarang();
        $data["jumlahdatakategoribarang"] = $this->Model_Halaman_Admin->JumlahKategoriBarang();
        $data["jumlahdatatransaksi"] = $this->Model_Halaman_Admin->JumlahDataTransaksi();
        $data["jumlahdatarinciantransaksi"] = $this->Model_Halaman_Admin->JumlahRincianTransaksi();
        $data["jumlahdatauserpembeli"] = $this->Model_Halaman_Admin->JumlahUserPembeli();
        $data["jumlahdatauseradmin"] = $this->Model_Halaman_Admin->JumlahUserAdmin();
        $data["datarekeningtoko"] = $this->Model_Halaman_Admin->JumlahDataRekeningToko();
        $data["jumlahdatapesanmasuk"] = $this->Model_Halaman_Admin->JumlahDataPesan();
        $this->load->view("Halaman_Admin/Halaman_Admin", $data);
    }

    public function DataBarang()
    {

        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }

        $data["judul"] = "Halaman Data Barang";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["databarang"] = $this->Model_Halaman_Admin->GetDataBarang($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_Barang", $data);
    }

    public function HapusDataBarang($dtbrg)
    {
        $this->Model_Halaman_Admin->DeleteOneData($dtbrg);
        $this->session->set_flashdata("barang", "DI HAPUS");
        redirect("Halaman_Admin/DataBarang");
    }

    public function DetailDataBarang($dtbrg)
    {
        $data["judul"] = "Halaman Detail Data Barang";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detaildatabarang"] = $this->Model_Halaman_Admin->GetDetailDataBarang($dtbrg);
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_Barang", $data);
    }


    public function EditDataBarang($dtbrg)
    {
        $data["barang"] = $this->db->get_where("tb_barang", ["id_barang" => $dtbrg])->row_array();

        $this->form_validation->set_rules("nama_barang", "NAMA BARANG", "required", [
            "required" => "Kolom Nama Barang Harus Diisi"
        ]);

        $this->form_validation->set_rules("keterangan_barang", "KETERANGAN BARANG", "required", [
            "required" => "Kolom Keterangan Barang Harus Diisi"
        ]);

        $this->form_validation->set_rules("kategori_barang", "KATEGORI BARANG", "required", [
            "required" => "Kolom Kategori Barang Harus Diisi"
        ]);

        $this->form_validation->set_rules("id_kategori", "ID KATEGORI", "required|numeric", [
            "required" => "Kolom ID Kategori Barang Harus Diisi",
            "numeric" => "Kolom ID Kategori Barang Harus Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("harga_barang", "HARGA BARANG", "required|numeric", [
            "required" => "Kolom Harga Barang Harus Diisi",
            "numeric" => "Kolom Harga Barang Harus Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("berat", "BERAT BARANG", "required|numeric", [
            "required" => "Kolom Berat Barang Harus Diisi",
            "numeric" => "Kolom Berat Barang Harus Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("stok", "STOK BARANG", "required|numeric", [
            "required" => "Kolom Stok Barang Harus Diisi",
            "numeric" => "Kolom Stok Barang Harus Di input Menggunakan Angka"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Edit Data Barang";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Edit_Data_Barang", $data);
        } else {
            $this->Model_Halaman_Admin->EditDataBarang();
            $this->session->set_flashdata("editt", "Berhasil");
            // redirect("Halaman_Admin/DataBarang")

            $redirectURL = 'Halaman_Admin/EditDataBarang/' . $dtbrg;

            redirect($redirectURL);
        }
    }

    public function Profile()
    {
        $data["judul"] = "Halaman Profile Admin";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Profile", $data);
    }

    public function UpdateProfileAdmin()
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

        $this->form_validation->set_rules("nama", "NAMA", "required", [
            "required" => "Kolom Nama Harus Diisi",
        ]);

        $this->form_validation->set_rules("alamat", "ALAMAT", "required", [
            "required" => "Kolom Alamat Harus Diisi",
        ]);

        $this->form_validation->set_rules("jenis_kelamin", "JENIS KELAMIN", "required", [
            "required" => "Kolom Jenis Kelamin Harus Diisi"
        ]);

        $this->form_validation->set_rules("tempat_lahir", "TEMPAT LAHIR", "required|alpha", [
            "required" => "Kolom Tempat Lahir Harus Diisi",
            "alpha" => "Kolom Tempat Lahir Tidak Boleh Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("tanggal_lahir", "TANGGAL LAHIR", "required", [
            "required" => "Kolom Tanggal lahir Harus Diisi"
        ]);

        $this->form_validation->set_rules("no_telepon", "NO TELEPON", "required|numeric", [
            "required" => "Kolom No Hp Harus Diisi",
            "numeric" => "Kolom No Hp Hanya Boleh Di input Menggunakan Angka"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("adminn", "GAGAL");
            $data["judul"] = "Halaman Profile Admin";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Profile", $data);
        } else {
            $this->Model_Halaman_Admin->UpdateProfileAdmin();
            $this->session->set_flashdata("admin", "BERHASIL");
            redirect("Halaman_Admin/Profile");
        }
    }

    public function UpdateFotoAdmin()
    {
        $config['upload_path'] = './assets/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '9000';

        $this->upload->initialize($config);

        $field_name = 'image';
        if (!$this->upload->do_upload($field_name)) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = [
                'upload' => $this->upload->data()
            ];
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/profile/' . $upload_data['upload']['file_name'];
            $this->load->library('image_lib', $config);
        }

        $image = $upload_data['upload']['file_name'];

        $email = $this->input->post("email");
        $image = $image;

        $this->db->set("image", $image);
        $this->db->where("email", $email);
        $this->db->update("user_admin");

        $this->session->set_flashdata("foto", "BERHASIL");
        redirect("Halaman_Admin/profile");
    }


    public function DataKategoriBarang()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Data Kategori Barang";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["datakategoribarang"] = $this->Model_Halaman_Admin->GetKategoriBarang($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_Kategori_Barang", $data);
    }

    public function HapusKategoriBarang($dtktgbrg)
    {
        $this->Model_Halaman_Admin->HapusKategoriBarang($dtktgbrg);
        $this->session->set_flashdata("kategoriii", "DI HAPUS");
        redirect("Halaman_Admin/DataKategoriBarang");
    }

    public function TambahDataBarang()
    {
        $this->form_validation->set_rules("nama_barang", "NAMA BARANG", "required", [
            "required" => "Kolom Nama Barang Harus Diisi",
        ]);

        $this->form_validation->set_rules("keterangan_barang", "KETERANGAN BARANG", "required", [
            "required" => "Kolom Keterangan Barang Harus Diisi",
        ]);

        $this->form_validation->set_rules("kategori_barang", "KATEGORI BARANG", "required", [
            "required" => "Kolom Kategori Barang Harus Diisi"
        ]);

        $this->form_validation->set_rules("id_kategori", "ID KATEGORI", "required|numeric", [
            "required" => "Kolom ID Kategori Harus Diisi",
            "numeric" => "Kolom ID Kategori Hanya Boleh Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("harga_barang", "HARGA BARANG", "required|numeric", [
            "required" => "Kolom Harga Barang Harus Diisi",
            "numeric" => "Kolom Harga Barang Hanya Boleh Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("berat", "BERAT", "required|numeric", [
            "required" => "Kolom Berat Barang Harus Diisi",
            "numeric" => "Kolom Berat Barang Hanya Boleh Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("stok", "STOK BARANG", "required|numeric", [
            "required" => "Kolom Stok Barang Harus Diisi",
            "numeric" => "Kolom Stok Barang Hanya Boleh Di input Menggunakan Angka"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Data Barang";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $data["databarang"] = $this->Model_Halaman_Admin->GetDataBarang();
            $this->load->view("Halaman_Admin/Halaman_Data_Barang", $data);
        } else {
            $this->Model_Halaman_Admin->TambahDataBarang();
            $this->session->set_flashdata("adminnnn", "BERHASIL");
            redirect("Halaman_Admin/DataBarang");
        }
    }

    public function DetailIdKategori($dtktgbrg)
    {
        $data["judul"] = "Halaman Detail Data Kategori Barang";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailidkategori"] = $this->Model_Halaman_Admin->GetDetailKategori($dtktgbrg);
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_Kategori_Barang", $data);
    }

    public function EditKategoriBarang($dtktgbrg)
    {


        $this->form_validation->set_rules("id_kategori", "ID KATEGORI", "required|numeric", [
            "required" => "Kolom ID Kategori Harus Diisi",
            "numeric" => "Kolom ID Kategori Harus Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("nama_kategori", "NAMA KATEGORI", "required", [
            "required" => "Kolom Nama Kategori Harus Diisi",
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Edit Kategori Barang";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $data["user2"] = $this->db->get_where("tb_kategori", ["id_kategori" => $dtktgbrg])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Edit_Data_Kategori_Barang", $data);
        } else {
            $data = [
                "id_kategori" => $this->input->post("id_kategori"),
                "nama_kategori" => $this->input->post("nama_kategori"),
            ];

            $this->db->where("id_kategori", $this->input->post("id_kategori"));
            $this->db->update("tb_kategori", $data);

            $this->session->set_flashdata("kategori", "BERHASIL");
            $redirectURL = 'Halaman_Admin/EditKategoriBarang/' . $dtktgbrg;
            redirect($redirectURL);
        }
    }

    public function TambahKategoriBarang()
    {
        $this->form_validation->set_rules('nama_kategori', 'NAMA KATEGORI', 'required', [
            'required' => 'Kolom Nama Kategori Harus Diisi',
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Data Kategori Barang";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $data["datakategoribarang"] = $this->Model_Halaman_Admin->TambahKategoriBarang();
            $this->load->view("Halaman_Admin/Halaman_Data_Kategori_Barang", $data);
        } else {
            $data = [
                "nama_kategori" => $this->input->post("nama_kategori")
            ];

            $this->db->insert("tb_kategori", $data);

            $this->session->set_flashdata("kategorii", "BERHASIL");
            redirect("Halaman_Admin/TambahKategoriBarang");
        }
    }

    public function DataTransaksi()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Data Transaksi";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["datatransaksi"] = $this->Model_Halaman_Admin->GetDataTransaksi($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_Transaksi", $data);
    }

    public function HapusDataTransaksi($dttsi)
    {
        $this->db->where("no_order", $dttsi);
        $this->db->delete("tb_transaksi");

        $this->db->where("no_order", $dttsi);
        $this->db->delete("tb_rinci_transaksi");

        $this->session->set_flashdata("transaksi", "DI HAPUS");
        redirect("Halaman_Admin/DataTransaksi");
    }

    public function DetailDataTransaksi($dttsi)
    {
        $data["judul"] = "Halaman Detail Data Transaksi";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detaildatatransaksi"] = $this->Model_Halaman_Admin->GetDetailDataTransaksi($dttsi);
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_Transaksi", $data);
    }

    public function EditDataTransaksi($dttsi)
    {
        $data["user2"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $dttsi])->row_array();

        $this->form_validation->set_rules("no_order", "NO ORDER", "required", [
            "required" => "Kolom No Order Harus Diisi"
        ]);

        $this->form_validation->set_rules("tgl_order", "TANGGAL ORDER", "required", [
            "required" => "Kolom Tanggal Order Harus Diisi"
        ]);

        $this->form_validation->set_rules("nama_alamat", "NAMA ALAMAT", "required", [
            "required" => "Kolom Nama Alamat Harus Diisi"
        ]);

        $this->form_validation->set_rules("nama_penerima", "NAMA PENERIMA", "required", [
            "required" => "Kolom Nama Penerima Harus Diisi"
        ]);

        $this->form_validation->set_rules("no_handphone_penerima", "NO HANDPHONE PENERIMA", "required|numeric", [
            "required" => "Kolom No Handphone Penerima Harus Diisi",
            "numeric" => "Kolom No Handphone Penerima Harus Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("alamat_lengkap_penerima", "ALAMAT LENGKAP PENERIMA", "required", [
            "required" => "Kolom Alamat Lengkap Penerima Harus Diisi"
        ]);

        $this->form_validation->set_rules("kecamatan", "KECAMATAN", "required", [
            "required" => "Kolom Kecamatan Harus Diisi"
        ]);

        $this->form_validation->set_rules("kode_pos", "KODE POS", "required|numeric", [
            "required" => "Kolom Kode Pos Harus Diisi",
            "numeric" => "Kolom Kode Pos Harus Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("kota", "KOTA", "required", [
            "required" => "Kolom Kota Harus Diisi"
        ]);

        $this->form_validation->set_rules("provinsi", "PROVINSI", "required", [
            "required" => "Kolom Provinsi Harus Diisi"
        ]);


        $this->form_validation->set_rules("berat_total", "BERAT TOTAL", "required|numeric", [
            "required" => "Kolom Berat Total Harus Diisi",
            "numeric" => "Kolom Berat Total Harus Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("total_bayar", "TOTAL BAYAR", "required|numeric", [
            "required" => "Kolom Total Bayar Harus Diisi",
            "numeric" => "Kolom Total Bayar Harus Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("status_bayar", "STATUS BAYAR", "required|numeric", [
            "required" => "Kolom Status Bayar Harus Diisi",
            "numeric" => "Kolom Status Bayar Harus Di input menggunakan Angka"
        ]);

        $this->form_validation->set_rules("atas_nama", "ATAS NAMA", "required", [
            "required" => "Kolom Atas Nama Harus Diisi",
        ]);

        $this->form_validation->set_rules("nama_bank", "NAMA BANK", "required", [
            "required" => "Kolom Nama Bank Harus Diisi",
        ]);

        $this->form_validation->set_rules("no_rek", "NOMOR REKENING", "required|numeric", [
            "required" => "Kolom No Rekening Diisi",
            "numeric" => "Kolom No Rekening Harus Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("status_order", "STATUS ORDER", "required|numeric", [
            "required" => "Kolom Status Order Diisi",
            "numeric" => "Kolom Status Order Harus Di input Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("penilaian_barang", "PENILAIAN BARANG", "required", [
            "required" => "Kolom Penilaian Pesanan Diisi",
        ]);


        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Edit Data Transaksi";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Edit_Data_Transaksi", $data);
        } else {
            $this->Model_Halaman_Admin->EditDataTransaksi();
            $this->session->set_flashdata("transaksi", "BERHASIL");

            $redirectURL = 'Halaman_Admin/EditDataTransaksi/' . $dttsi;
            redirect($redirectURL);
        }
    }

    public function PesananMasuk()
    {
        $data["judul"] = "Halaman Pesanan Masuk";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["pesananmasuk"] = $this->Model_Halaman_Admin->GetPesananMasuk();
        // $data["sudahbayar"] = $this->Model_Halaman_Admin->GetSudahBayar();
        $data["diproses"] = $this->Model_Halaman_Admin->Diproses();
        $data["dikirim"] = $this->Model_Halaman_Admin->Dikirim();
        $data["diterima"] = $this->Model_Halaman_Admin->Diterima();
        $data["dibatalkan"] = $this->Model_Halaman_Admin->Dibatalkan();
        $this->load->view("Halaman_Admin/Halaman_Pesanan_Masuk", $data);
    }


    public function CekBuktiBayar($sdhbyr)
    {
        $data["judul"] = "Halaman Pesanan Masuk";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["cekbayar"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $sdhbyr])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Cek_Bukti_Bayar", $data);
    }

    public function SudahDiProses($cekbayar)
    {
        $data = [
            "status_order" => 1
        ];

        $this->db->where("id_transaksi", $cekbayar);
        $this->db->update("tb_transaksi", $data);

        $this->session->set_flashdata("berhasil", "BERHASIL");
        $redirectURL = 'Halaman_Admin/CekBuktiBayar/' . $cekbayar;
        redirect($redirectURL);
    }


    public function ProsesDikirim($dprs)
    {
        $data = [
            "status_order" => 2
        ];

        $this->db->where("id_transaksi", $dprs);
        $this->db->update("tb_transaksi", $data);

        $this->session->set_flashdata("berhasill", "BERHASIL");
        redirect("Halaman_Admin/PesananMasuk");
    }


    public function DataRinciTransaksi()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Rincian Transaksi";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["datarincitransaksi"] = $this->Model_Halaman_Admin->GetDataRinciTransaksi($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Rinci_Data_Transaksi", $data);
    }


    public function HapusRinciTransaksi($dtrctri)
    {
        $this->db->where("id_rinci", $dtrctri);
        $this->db->delete("tb_rinci_transaksi");

        $this->session->set_flashdata("rinci", "DI HAPUS");
        redirect("Halaman_Admin/DataRinciTransaksi");
    }


    public function DetailRinciTransaksi($dtrctri)
    {
        $data["judul"] = "Halaman Detail Rinci Transaksi";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailrincitransaksi"] = $this->Model_Halaman_Admin->GetDetailRinciTransaksi($dtrctri);
        $this->load->view("Halaman_Admin/Halaman_Detail_Rinci_Transaksi", $data);
    }


    public function EditRinciTransaksi($dtrctri)
    {
        $data["judul"] = "Halaman Edit Data Rinci Transaksi";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["editrincitransaksi"] = $this->db->get_where("tb_rinci_transaksi", ["id_rinci" => $dtrctri])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Edit_Data_Rinci_Transaksi", $data);
    }


    public function FormEditRinciTransaksi($editrincitransaksi)
    {

        $this->form_validation->set_rules("nama_barang", "NAMA BARANG", "required", [
            "required" => "Kolom Nama Barang Harus Diisi",
        ]);

        $this->form_validation->set_rules("harga_barang", "HARGA BARANG", "required|numeric", [
            "required" => "Kolom Harga Barang Harus Diisi",
            "numeric" => "Kolom Harga Barang Harus Diisi Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("berat", "BERAT BARANG", "required|numeric", [
            "required" => "Kolom Berat Barang Harus Diisi",
            "numeric" => "Kolom Berat Barang Harus Diisi Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("qty", "QTY", "required|numeric", [
            "required" => "Kolom QTY Harus Diisi",
            "numeric" => "Kolom QTY Harus Diisi Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("subtotal", "SUBTOTAL", "required|numeric", [
            "required" => "Kolom Subtotal Harus Diisi",
            "numeric" => "Kolom Subtotal Harus Diisi Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("kategori_barang", "KATEGORI BARANG", "required", [
            "required" => "Kolom Kategori Barang Harus Diisi",
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Edit Data Rinci Transaksi";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $data["editrincitransaksi"] = $this->db->get_where("tb_rinci_transaksi", ["id_rinci" => $editrincitransaksi])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Edit_Data_Rinci_Transaksi", $data);
        } else {

            $data = [
                "nama_barang" => $this->input->post("nama_barang"),
                "harga_barang" => $this->input->post("harga_barang"),
                "berat" => $this->input->post("berat"),
                "qty" => $this->input->post("qty"),
                "subtotal" => $this->input->post("subtotal"),
                "kategori_barang" => $this->input->post("kategori_barang"),
            ];

            $this->db->where("id_rinci", $editrincitransaksi);
            $this->db->update("tb_rinci_transaksi", $data);

            $this->session->set_flashdata("editrinci", "Edit Rinci Transaksi Berhasil");
            $redirectURL = 'Halaman_Admin/FormEditRinciTransaksi/' . $editrincitransaksi;
            redirect($redirectURL);
        }
    }


    public function DataUserPembeli()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Data User Pembeli";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["userpembeli"] = $this->Model_Halaman_Admin->GetDataUserPembeli($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_User_Pembeli", $data);
    }


    public function HapusDataUserPembeli($usrpbl)
    {
        $this->db->where("id_pembeli", $usrpbl);
        $this->db->delete("user");

        $this->session->set_flashdata("datauserpembeli", "Hapus Data User Pembeli Berhasil");
        redirect("Halaman_Admin/DataUserPembeli");
    }


    public function DetailDataUserPembeli($usrpbl)
    {
        $data["judul"] = "Halaman Detail Data User Pembeli";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailuserpembeli"] = $this->db->get_where("user", ["id_pembeli" => $usrpbl])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_User_Pembeli", $data);
    }



    public function DataUserAdmin()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Data User Admin";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["datauseradminn"] = $this->Model_Halaman_Admin->GetDataUserAdmin($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_User_Admin", $data);
    }


    public function HapusDataUserAdmin($usradmn)
    {
        $this->db->where("id_admin", $usradmn);
        $this->db->delete("user_admin");

        $this->session->set_flashdata("datauseradminn", "Data User Admin Berhasil Di Hapus");
        redirect("Halaman_Admin/DataUserAdmin");
    }


    public function DetailDataUserAdmin($usradmn)
    {
        $data["judul"] = "Halaman Detail Data User Admin";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detaildatauseradmin"] = $this->db->get_where("user_admin", ["id_admin" => $usradmn])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_User_Admin", $data);
    }




    public function DataRekeningToko()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Data Rekening Toko";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["datarekeningtoko"] = $this->Model_Halaman_Admin->GetDataRekeningToko($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_Rekening_Toko", $data);
    }

    public function HapusDataRekeningToko($dtrkntk)
    {
        $this->db->where("id_rekening", $dtrkntk);
        $this->db->delete("rekening");

        $this->session->set_flashdata("datarekeningtoko", "Hapus Data Rekening Toko Berhasil");
        redirect("Halaman_Admin/DataRekeningToko");
    }

    public function DetailDataRekeningToko($dtrkntk)
    {
        $data["judul"] = "Halaman Data Rekening Toko";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailrekeningtoko"] = $this->db->get_where("rekening", ["id_rekening" => $dtrkntk])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_Rekening_Toko", $data);
    }


    public function EditDataRekeningToko($dtrkntk)
    {
        $data["judul"] = "Halaman Edit Data Rekening Toko";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["editrekeningtoko"] = $this->db->get_where("rekening", ["id_rekening" => $dtrkntk])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Edit_Data_Rekening_Toko", $data);
    }


    public function FormEditDataRekeningToko($editrekeningtoko)
    {
        $this->form_validation->set_rules("nama_bank", "NAMA BANK", "required", [
            "required" => "Kolom Nama Bank Harus Diisi"
        ]);

        $this->form_validation->set_rules("atas_nama", "ATAS NAMA", "required", [
            "required" => "Kolom Atas Nama Diisi"
        ]);

        $this->form_validation->set_rules("no_rek", "NO REK", "required|numeric", [
            "required" => "Kolom No Rek Harus Diisi",
            "numeric" => "Kolom No Rek Harus Diisi Berupa Angka"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Edit Data Rekening Toko";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $data["editrekeningtoko"] = $this->db->get_where("rekening", ["id_rekening" => $editrekeningtoko])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Edit_Data_Rekening_Toko", $data);
        } else {

            $data = [
                "nama_bank" => $this->input->post("nama_bank"),
                "atas_nama" => $this->input->post("atas_nama"),
                "no_rek" => $this->input->post("no_rek"),
            ];

            $this->db->where("id_rekening", $editrekeningtoko);
            $this->db->update("rekening", $data);

            $this->session->set_flashdata("editrekeningtokoo", "Edit Data Rekening Toko Berhasil");
            $redirectURL = 'Halaman_Admin/FormEditDataRekeningToko/' . $editrekeningtoko;
            redirect($redirectURL);
        }
    }


    public function DataPesan()
    {
        if ($this->input->post("submit")) {
            $data["pencarian"] = $this->input->post("cari");
        } else {
            $data["pencarian"] = null;
        }
        $data["judul"] = "Halaman Data Pesan";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["datapesan"] = $this->Model_Halaman_Admin->GetDataPesan($data["pencarian"]);
        $this->load->view("Halaman_Admin/Halaman_Data_Pesan", $data);
    }


    public function HapusDataPesan($dtpsn)
    {
        $this->db->where("id", $dtpsn);
        $this->db->delete("contact");

        $this->session->set_flashdata("datapesan", "Data Pesan Berhasil Di Hapus");
        redirect("Halaman_Admin/DataPesan");
    }

    public function DetailDataPesan($dtpsn)
    {
        $data["judul"] = "Halaman Detail Data Pesan";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["detaildatapesan"] = $this->db->get_where("contact", ["id" => $dtpsn])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Detail_Data_Pesan", $data);
    }


    public function EditDataPesan($dtpsn)
    {
        $data["judul"] = "Halaman Edit Data Pesan";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["editdatapesan"] = $this->db->get_where("contact", ["id" => $dtpsn])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Edit_Data_Pesan", $data);
    }


    public function FormEditDataPesan($editdatapesan)
    {
        $this->form_validation->set_rules("nama_pengirim", "NAMA PENGIRIM", "required", [
            "required" => "Kolom Nama Pengirim Harus Diisi",
        ]);

        $this->form_validation->set_rules("email_pengirim", "EMAIL PENGIRIM", "required|trim|valid_email", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Kolom Email Harus Diisi dengan Valid",
        ]);

        $this->form_validation->set_rules("no_handphone", "NO HANDPHONE", "required|numeric", [
            "required" => "Kolom No Handphone Harus Diisi",
            "numeric" => "Kolom No Handphone Harus Diisi dengan angka",
        ]);

        $this->form_validation->set_rules("pesan", "PESAN", "required", [
            "required" => "Kolom Pesan Harus Diisi",
        ]);

        $this->form_validation->set_rules("tanggal_pengiriman", "TANGGAL PENGIRIMAN", "required", [
            "required" => "Kolom Tanggal Pengiriman Harus Diisi",
        ]);


        if ($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Edit Data Pesan";
            $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
            $data["editdatapesan"] = $this->db->get_where("contact", ["id" => $editdatapesan])->row_array();
            $this->load->view("Halaman_Admin/Halaman_Edit_Data_Pesan", $data);
        } else {

            $data = [
                "nama_pengirim" => $this->input->post("nama_pengirim"),
                "email_pengirim" => $this->input->post("email_pengirim"),
                "no_handphone" => $this->input->post("no_handphone"),
                "pesan" => $this->input->post("pesan"),
                "tanggal_pengiriman" => $this->input->post("tanggal_pengiriman"),
            ];

            $this->db->where("id", $editdatapesan);
            $this->db->update("contact", $data);

            $this->session->set_flashdata("editdatapesan", "Edit Data Pesan Berhasil");
            $redirectURL = 'Halaman_Admin/FormEditDataPesan/' . $editdatapesan;
            redirect($redirectURL);
        }
    }

    public function EditDataUserAdmin($usradmn)
    {
        $data["user3"] = $this->db->get_where("user_admin", ["id_admin" => $usradmn])->row_array();
        $data["judul"] = "Halaman Edit Data User Admin";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Edit_Data_User_Admin", $data);
    }

    public function FormEditDataUserAdmin($user3)
    {
        $data = [
            "nama" => $this->input->post("nama"),
            "alamat" => $this->input->post("alamat"),
            "jenis_kelamin" => $this->input->post("jenis_kelamin"),
            "tempat_lahir" => $this->input->post("tempat_lahir"),
            "tanggal_lahir" => $this->input->post("tanggal_lahir"),
            "no_telepon" => $this->input->post("no_telepon"),
            "email" => $this->input->post("email"),
            "role_id" => $this->input->post("role_id"),
            "is_active" => $this->input->post("is_active"),
            "date_created" => $this->input->post("date_created"),
        ];

        $this->db->where("id_admin", $user3);
        $this->db->update("user_admin", $data);

        $this->session->set_flashdata("editdataadmin", "Edit Data Admin Berhasil");
        redirect("Halaman_Admin/DataUserAdmin");
    }


    public function CekBuktiDiterima($dtrm)
    {
        $data["judul"] = "Halaman Cek Bukti Terima Barang";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["cekbuktiditerima"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $dtrm])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Cek_Bukti_Terima_Barang", $data);
    }


    public function StatusToko()
    {
        $data["judul"] = "Halaman Status Toko";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["statustoko"] = $this->db->get("toko")->result_array();
        $this->load->view("Halaman_Admin/Halaman_Status_Toko", $data);
    }


    public function EditStatusToko($id_toko)
    {
        $data["judul"] = "Halaman Edit Status Toko";
        $data["user"] = $this->db->get_where("user_admin", ["email" => $this->session->userdata("email")])->row_array();
        $data["editstatustoko"] = $this->db->get_where("toko", ["id_toko" => $id_toko])->row_array();
        $this->load->view("Halaman_Admin/Halaman_Edit_Status_Toko", $data);
    }


    public function Prosessing($editstatustoko)
    {
        $data = [
            "active" => $this->input->post("active")
        ];

        $this->db->where("id_toko", $editstatustoko);
        $this->db->update("toko", $data);

        $this->session->set_flashdata("editstatustokoo", "Ubah Status Toko Berhasil");

        $redirectURL = 'Halaman_Admin/StatusToko';
        redirect($redirectURL);
    }
}
