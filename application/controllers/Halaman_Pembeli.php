<?php
class Halaman_Pembeli extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata("email")) {
            redirect("Home/index");
        } else {
            if ($this->session->userdata("role_id") != 2) {
                redirect("Halaman_Eror");
            } else if ($this->session->userdata("active") != 1) {
                redirect("Halaman_Tutup/index");
            }
        }

        $this->load->helper("form");
    }

    public function index()
    {
        $produk = $this->db->get("tb_barang")->row_array();


        $this->load->library('pagination');


        $config['base_url'] = 'http://localhost/project-toko-roti/Halaman_Pembeli/index';
        $config['total_rows'] = $this->Model_Halaman_Pembeli->GetJumlahProduk();
        $config['per_page'] = 8;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';


        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);

        $data["start"] = $this->uri->segment(3);

        $data["judul"] = "Halaman Semua Produk";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["produk"] = $this->Model_Halaman_Pembeli->GetAllProduk($config["per_page"], $data["start"]);
        $data["kategori"] = $this->Model_Halaman_Pembeli->GetCategory();
        $this->load->view("Halaman_Produk", $data);
    }

    public function StokBarang()
    {
        $data["judul"] = "Halaman Stok Kosong";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Stok_Kosong", $data);
    }

    public function TampilCategory($id_kategori)
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/project-toko-roti/Halaman_Pembeli/TampilCategory/' . $id_kategori;
        $config['total_rows'] = $this->Model_Halaman_Pembeli->GetJumlahProdukCategory($id_kategori);
        $config['per_page'] = 8;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';


        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);

        $data["start"] = $this->uri->segment(4);

        // Tutup Pagination

        $data["judul"] = $this->Model_Halaman_Pembeli->JudulCategory($id_kategori);
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["kategoriproduk"] = $this->Model_Halaman_Pembeli->ViewCategory($id_kategori, $config["per_page"], $data["start"]);
        $data["kategori"] = $this->Model_Halaman_Pembeli->GetCategory();
        $this->load->view("Halaman_Kategori_Produk", $data);
    }


    public function Keranjang($id_barang)
    {
        $produk = $this->db->get_where("tb_barang", ["id_barang" => $id_barang])->row_array();

        $qty = $this->input->post("qty");

        if (!$produk["stok"]) {
            $this->session->set_flashdata("Stok", "Kosong");
            redirect("Halaman_Pembeli/StokBarang");
        } else {
            if ($qty > $produk["stok"]) {
                $this->session->set_flashdata("lebihbatass", "Stok");
                redirect("Halaman_Pembeli/index");
            } else {
                $data = [
                    'id'      => $produk["id_barang"],
                    'qty'     => $this->input->post("qty"),
                    'price'   => $produk["harga_barang"],
                    'name'    => $produk["nama_barang"],
                    'kategori' => $produk["kategori_barang"],
                    'gambar' => $produk["gambar"],
                    'stok' => $produk["stok"],
                    'berat' => $produk["berat"]
                ];

                $this->cart->insert($data);
                $this->session->set_flashdata("berhasil", "BERHASIL");
                redirect("Halaman_Pembeli/index");
            }
        }
    }



    public function HalamanKeranjang()
    {

        if (!$this->cart->contents()) {
            $this->session->set_flashdata("Kosonggg", "KOSONG");
            redirect("Halaman_Pembeli/HalamanKeranjangKosong");
        } else {
            $data["judul"] = "Halaman Keranjang Belanja";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $this->load->view("Halaman_Keranjang_Belanja", $data);
        }
    }

    public function HapusBarangKeranjang($items)
    {
        $this->cart->remove($items);
        $this->session->set_flashdata("Hapuss", "Berhasil");
        redirect("Halaman_Pembeli/HalamanKeranjang");
    }

    public function HapusSemuaKeranjang()
    {

        $this->cart->destroy();
        $this->session->set_flashdata("Hapus", "Berhasil");
        redirect("Halaman_Pembeli/HalamanKeranjang");
    }


    public function UpdateCart()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items["rowid"],
                'qty'   => $this->input->post($i . '[qty]')
            );

            $qty = $this->input->post($i . '[qty]');
            $produk = $this->db->get_where("tb_barang", ["id_barang" => $items["id"]])->row_array();

            if ($qty > $produk["stok"]) {
                $this->session->set_flashdata("lebihbatas", "Stok");
                redirect("Halaman_Pembeli/HalamanKeranjang");
            } else {
                $i++;
                $this->cart->update($data);
            }
        }

        if ($this->cart->contents()) {
            $this->session->set_flashdata('Keranjang', 'DI UPDATE');
            redirect('Halaman_Pembeli/HalamanKeranjang');
        } else {
            $this->session->set_flashdata('Keranjangg', 'KOSONG');
            redirect("Halaman_Pembeli/HalamanKeranjang");
        }
    }


    public function DetailProduk($id_barang)
    {
        $data["judul"] = "Halaman Detail Produk";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailproduk"] = $this->Model_Halaman_Pembeli->GetDetailProduk($id_barang);
        $this->load->view("Halaman_Detail_Produk", $data);
    }


    public function Profile()
    {

        $data["judul"] = "Halaman Akun Profile Pembeli";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Profile_Pembeli", $data);
    }



    public function UpdateProfileUser()
    {

        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

        $this->form_validation->set_rules("nama", "NAMA", "required|trim", [
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

        $this->form_validation->set_rules("no_telepon", "NO TELEPON", "required|integer", [
            "required" => "Kolom No Hp Harus Diisi",
            "integer" => "Kolom No Hp Hanya Boleh Di input Menggunakan Angka"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata("profile", "GAGAL");
            $data["judul"] = "Halaman Akun Profile Pembeli";
            $this->load->view("Halaman_Profile_Pembeli", $data);
        } else {
            $this->Model_Halaman_Pembeli->UpdateProfileUser();
            $this->session->set_flashdata("profilee", "BERHASIL");
            redirect("Halaman_Pembeli/Profile");
        }
    }


    public function Lengkapi()
    {

        $data["judul"] = "Halaman Chekout";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Lengkapi_Pembeli", $data);
    }

    public function KeranjangKosong()
    {
        $data["judul"] = "Halaman Chekout";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Keranjang_Kosong_Pembeli", $data);
    }

    public function HalamanKeranjangKosong()
    {

        $data["judul"] = "Halaman Keranjang Kosong";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Keranjang_Kosong_Pembeli", $data);
    }

    public function Checkout()
    {

        $user = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

        if (!$this->cart->contents()) {
            $this->session->set_flashdata("kosong", "KOSONG");
            redirect("Halaman_Pembeli/KeranjangKosong");
        } else {
            if (!$user["alamat"]) {
                $this->session->set_flashdata("lengkapialamat", "KOSONG");
                redirect("Halaman_Pembeli/Lengkapi");
            } else {
                if (!$user["no_telepon"]) {
                    $this->session->set_flashdata("lengkapinotelepon", "KOSONG");
                    redirect("Halaman_Pembeli/Lengkapi");
                } else {
                    if (!$user["alamat"] && !$user["no_telepon"]) {
                        $this->session->set_flashdata("lengkapialamatnotelepon", "KOSONG");
                        redirect("Halaman_Pembeli/Lengkapi");
                    } else {

                        $this->form_validation->set_rules("nama_alamat", "NAMA ALAMAT", "required", [
                            "required" => "Kolom Nama Alamat Harus Diisi"
                        ]);

                        $this->form_validation->set_rules("nama_penerima", "NAMA PENERIMA", "required", [
                            "required" => "Kolom Nama Penerima Alamat Harus Diisi"
                        ]);

                        $this->form_validation->set_rules("no_handphone_penerima", "NO HANDPHONE PENERIMA", "required|integer", [
                            "required" => "Kolom No Handphone Penerima Harus Diisi",
                            "integer" => "Kolom No Handphone Penerima Harus Diisi Menggunakan Angka"
                        ]);

                        $this->form_validation->set_rules("alamat_lengkap_penerima", "ALAMAT LENGKAP PENERIMA", "required", [
                            "required" => "Kolom Alamat Lengkap Penerima Harus Diisi",
                        ]);

                        $this->form_validation->set_rules("kecamatan", "KECAMATAN", "required", [
                            "required" => "Kolom Kecamatan Harus Diisi",
                        ]);

                        $this->form_validation->set_rules("kode_pos", "KODE POS", "required|integer", [
                            "required" => "Kolom Kode Pos Harus Diisi",
                            "integer" => "Kolom Kode Pos Harus Diisi Menggunakan Angka"
                        ]);

                        $this->form_validation->set_rules("kota", "KOTA", "required", [
                            "required" => "Kolom Kota Harus Diisi",
                        ]);

                        $this->form_validation->set_rules("provinsi", "PROVINSI", "required", [
                            "required" => "Kolom Provinsi Harus Diisi",
                        ]);

                        if ($this->form_validation->run() == FALSE) {
                            $data["judul"] = "Halaman Checkout";
                            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
                            $this->load->view("Halaman_Chekout_Pembeli", $data);
                        } else {

                            date_default_timezone_set("Asia/Jakarta");
                            $data = [
                                "id_pembeli" => $this->session->userdata("id"),
                                "no_order" => $this->input->post("no_order"),
                                "tgl_order" => date("Y-m-d H:i:s"),
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
                                "status_bayar" => '0',
                                "status_order" => 0,
                            ];

                            $this->Model_Halaman_Pembeli->InsertTransaksi($data);

                            foreach ($this->cart->contents() as $items) {
                                $data2 = [
                                    "no_order" => $this->input->post("no_order"),
                                    "id_barang" => $items["id"],
                                    "gambar" => $items["gambar"],
                                    "nama_barang" => $items["name"],
                                    "harga_barang" => $items["price"],
                                    "berat" => $items["berat"],
                                    "qty" => $items["qty"],
                                    "subtotal" => $items["subtotal"],
                                    "kategori_barang" => $items["kategori"]
                                ];

                                $this->Model_Halaman_Pembeli->InsertCart($data2);

                                $barang = $this->db->get_where("tb_barang", ["id_barang" => $items["id"]])->row_array();

                                $stok = $barang["stok"] - $items["qty"];

                                $data = [
                                    "stok" => $stok
                                ];

                                $this->db->where("id_barang", $items["id"]);
                                $this->db->update("tb_barang", $data);
                            }

                            // $email = $this->session->userdata("email");
                            // $no_order = $this->input->post("no_order");

                            // $this->_sendEmailPesanan($email, $no_order);

                            $this->cart->destroy();
                            $this->session->set_flashdata("berhasill", "BERHASIL");
                            redirect("Halaman_Pembeli/PesananSaya");
                        }
                    }
                }
            }
        }
    }

    // private function _sendEmailPesanan($email, $no_order)
    // {
    //     $config = [
    //         'protocol' => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_user' => 'cahayabakery624@gmail.com',
    //         'smtp_pass' => 'jvcb mqzi bbtx jhcq',
    //         'smtp_port' => 465,
    //         'mailtype' => 'html',
    //         'charset' => 'utf-8',
    //         'newline' => "\r\n"

    //     ];

    //     $this->load->library("email", $config);

    //     $this->email->initialize($config);


    //     $this->email->from('cahayabakery624@gmail.com', 'Cahaya Bakery');
    //     $this->email->to($this->session->userdata("email"));
    //     $this->email->subject('Hai "' . $email . '" Terimakasih Sudah Melakukan Pembelian Barang Di Cahaya Bakery. No Pesanan Mu Adalah "' . $no_order . '" ');
    //     $this->email->message('""');

    //     if ($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die();
    //     }
    // }

    public function PesananSaya()
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["belumbayar"] = $this->Model_Halaman_Pembeli->BelumBayar();
        $data["diproses"] = $this->Model_Halaman_Pembeli->Diproses();
        $data["dikirim"] = $this->Model_Halaman_Pembeli->Dikirim();
        $data["diterima"] = $this->Model_Halaman_Pembeli->Diterima();
        $data["dibatalkan"] = $this->Model_Halaman_Pembeli->Dibatalkan();
        $data["judul"] = "Halaman Pesanan Saya";
        $this->load->view("Halaman_Pesanan_Saya", $data);
    }


    public function GalleryProduk()
    {

        $data["judul"] = "Halaman Gallery Produk";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["gambar"] = $this->db->get("tb_barang")->result_array();
        $this->load->view("Halaman_Gallery_Produk", $data);
    }


    public function DetailOrderPesanan($sdhbyr)
    {

        $data["judul"] = "Halaman Detail Order Pesanan";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesanan"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesanan($sdhbyr);
        // $data["detailorderpesananbarang"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarang();
        $this->load->view("Halaman_Detail_Order_Pesanan_Menunggu_Diproses", $data);
    }

    public function DetailOrderPesananBarang($sdhbyr)
    {

        $data["judul"] = "Halaman Detail Order Pesanan Barang";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesananbarang"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarang($sdhbyr);
        $data["detailorderpesananbarangg"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarangg($sdhbyr);
        $this->load->view("Halaman_Detail_Order_Pesanan_Barang", $data);
    }

    public function DetailOrderPesananDiproses($dprs)
    {

        $data["judul"] = "Halaman Detail Order Pesanan";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesanan"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananDiproses($dprs);
        // $data["detailorderpesananbarang"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarang();
        $this->load->view("Halaman_Detail_Order_Pesanan", $data);
    }

    public function DetailOrderPesananBarangDiproses($dprs)
    {

        $data["judul"] = "Halaman Detail Order Pesanan Barang";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesananbarang"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarangDiproses($dprs);
        $data["detailorderpesananbarangg"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBaranggDiproses($dprs);
        $this->load->view("Halaman_Detail_Order_Pesanan_Barang", $data);
    }

    public function DetailOrderPesananDikirim($dkrm)
    {

        $data["judul"] = "Halaman Detail Order Pesanan";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesanan"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananDiproses($dkrm);
        // $data["detailorderpesananbarang"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarang();
        $this->load->view("Halaman_Detail_Order_Pesanan", $data);
    }

    public function DetailOrderPesananBarangDikirim($dkrm)
    {

        $data["judul"] = "Halaman Detail Order Pesanan Barang";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesananbarang"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBarangDiproses($dkrm);
        $data["detailorderpesananbarangg"] = $this->Model_Halaman_Pembeli->GetDetailOrderPesananBaranggDiproses($dkrm);
        $this->load->view("Halaman_Detail_Order_Pesanan_Barang", $data);
    }

    public function Contact()
    {
        $this->form_validation->set_rules("nama_pengirim", "NAMA PENGIRIM", "required", [
            "required" => "Kolom Nama Pengirim Harus Diisi"
        ]);

        $this->form_validation->set_rules("email_pengirim", "EMAIL PENGIRIM", "required|valid_email", [
            "required" => "Kolom Email Pengirim Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid"
        ]);

        $this->form_validation->set_rules("no_handphone", "NO HANDPHONE", "required|integer", [
            "required" => "Kolom No Handphone Pengirim Harus Diisi",
            "integer" => "Kolom No Handphone Pengirim Harus Diisi Menggunakan Angka"
        ]);

        $this->form_validation->set_rules("pesan", "PESAN", "required",  [
            "required" => "Kolom Pesan Harus Diisi"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Kontak";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $this->load->view("Halaman_Kontak_Pembeli", $data);
        } else {
            $this->Model_Halaman_Pembeli->Contact();
            $this->session->set_flashdata("kontak", "Berhasil");
            redirect("Halaman_Pembeli/Contact");
        }
    }

    public function TerimaBarang($dkrm)
    {

        $config['upload_path'] = './assets/bukti_diterima/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '9000';

        $this->upload->initialize($config);

        $field_name = 'bukti_diterima';
        if (!$this->upload->do_upload($field_name)) {

            $this->session->set_flashdata('terimabarang', 'Upload Bukti Terima Barang Gagal');
            redirect('Halaman_Pembeli/PesananSaya');
        } else {
            $upload_data = [
                'upload' => $this->upload->data()
            ];
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/bukti_diterima/' . $upload_data['upload']['file_name'];
            $this->load->library('image_lib', $config);

            $image = $upload_data['upload']['file_name'];


            $data = [
                "bukti_diterima" => $image,
                "status_order" => 3,
            ];

            $this->db->where("id_transaksi", $dkrm);
            $this->db->update("tb_transaksi", $data);

            $this->session->set_flashdata("berhasil", "BERHASIL");
            redirect("Halaman_Pembeli/PesananSaya");
        }
    }

    public function DetailOrderPesananSelesai($dtrm)
    {
        $data["judul"] = "Detail Alamat Order";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderalamat"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $dtrm])->row_array();
        $this->load->view("Halaman_Detail_Order_Pesanan_Selesai", $data);
    }

    public function DetailOrderPesananBarangSelesai($dtrm)
    {
        $data["judul"] = "Detail Order Pesanan";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderpesanan"] = $this->db->get_where("tb_rinci_transaksi", ["no_order" => $dtrm])->result_array();
        $data["detailorderpesanann"] = $this->db->get_where("tb_rinci_transaksi", ["no_order" => $dtrm])->row_array();
        $this->load->view("Halaman_Detail_Order_Pesanan_Barang_Selesai", $data);
    }


    public function HapusPesanan($blmbyr)
    {
        $this->db->where("no_order", $blmbyr);
        $this->db->delete("tb_transaksi");

        $this->db->where("no_order", $blmbyr);
        $this->db->delete("tb_rinci_transaksi");

        $this->session->set_flashdata("hapus", "BERHASIL");
        redirect("Halaman_Pembeli/PesananSaya");
    }

    public function DetailHistoriPesanan()
    {

        $historipesanan = $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id")])->row_array();

        if ($historipesanan["status_bayar"] == 1) {
            $data["judul"] = "Detail Histori Pembelian";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $data["historipesananbarang"] = $this->db->get_where("tb_transaksi", ["id_pembeli" => $this->session->userdata("id"), "status_bayar" => 1])->result_array();
            $this->load->view("Halaman_Detail_Histori_pesanan", $data);
        } else {
            $this->session->set_flashdata("histori", "HISTORI");
            redirect("Halaman_Pembeli/HistoriPesananKosong");
        }
    }

    public function HistoriPesananKosong()
    {
        $data["judul"] = "Detail Histori Pembelian";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $this->load->view("Halaman_Histori_Pesanan_Kosong", $data);
    }


    public function DetailOrderBarangHistori($historipsnbrg)
    {
        $data["judul"] = "Detail Order Barang";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["detailorderbaranghistori"] = $this->db->get_where("tb_rinci_transaksi", ["no_order" => $historipsnbrg])->result_array();
        $data["detailorderbaranghistorii"] = $this->db->get_where("tb_rinci_transaksi", ["no_order" => $historipsnbrg])->row_array();
        $this->load->view("Halaman_Detail_Order_Barang_Histori", $data);
    }

    public function UpdateFotoPembeli()
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

        $data = [
            'image' => $image,
        ];

        $email = $this->input->post("email");

        $this->db->where("email", $email);
        $this->db->update("user", $data);

        $this->session->set_flashdata("foto", "DI UBAH");
        redirect("Halaman_Pembeli/Profile");
    }

    public function EditOrderAlamat($detailorderpesanan)
    {
        $data["judul"] = "Halaman Edit Order Alamat";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["editorderalamat"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $detailorderpesanan])->row_array();
        $this->load->view("Halaman_Edit_Order_Alamat", $data);
    }


    public function FormEditOrderAlamat($detailorderpesanan)
    {
        $this->form_validation->set_rules("nama_alamat", "NAMA ALAMAT", "required", [
            "required" => "Kolom Nama Alamat Harus Diisi",
        ]);

        $this->form_validation->set_rules("nama_penerima", "NAMA PENERIMA", "required", [
            "required" => "Kolom Nama Penerima Harus Diisi",
        ]);

        $this->form_validation->set_rules("no_handphone_penerima", "NO HANDPHONE PENERIMA", "required|numeric", [
            "required" => "Kolom No Handphone Penerima Harus Diisi",
            "numeric" => "Kolom No Handphone Penerima Harus Diisi Menggunakan Angka",
        ]);

        $this->form_validation->set_rules("alamat_lengkap_penerima", "ALAMAT LENGKAP PENERIMA", "required", [
            "required" => "Kolom Alamat Lengkap Penerima Harus Diisi"
        ]);

        $this->form_validation->set_rules("kecamatan", "KECAMATAN", "required", [
            "required" => "Kolom Kecamatan Harus Diisi"
        ]);

        $this->form_validation->set_rules("kode_pos", "KODE POS", "required|numeric", [
            "required" => "Kolom Kode Pos Harus Diisi",
            "numeric" => "Kolom Kode Pos Harus Diisi Menggunakan Angka",
        ]);

        $this->form_validation->set_rules("kota", "KOTA", "required", [
            "required" => "Kolom Kota Harus Diisi",
        ]);

        $this->form_validation->set_rules("provinsi", "PROVINSI", "required", [
            "required" => "Kolom Provinsi Harus Diisi",
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Edit Order Alamat";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $data["editorderalamat"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $detailorderpesanan])->row_array();
            $this->load->view("Halaman_Edit_Order_Alamat", $data);
        } else {
            $data = [
                "nama_alamat" => $this->input->post("nama_alamat"),
                "nama_penerima" => $this->input->post("nama_penerima"),
                "no_handphone_penerima" => $this->input->post("no_handphone_penerima"),
                "alamat_lengkap_penerima" => $this->input->post("alamat_lengkap_penerima"),
                "kecamatan" => $this->input->post("kecamatan"),
                "kode_pos" => $this->input->post("kode_pos"),
                "kota" => $this->input->post("kota"),
                "provinsi" => $this->input->post("provinsi"),
            ];

            $this->db->where("id_transaksi", $detailorderpesanan);
            $this->db->update("tb_transaksi", $data);

            $this->session->set_flashdata("update", "BERHASIL");

            $redirectURL = 'Halaman_Pembeli/FormEditOrderAlamat/' . $detailorderpesanan;

            $this->session->set_flashdata('update', 'BERHASIL');
            redirect($redirectURL);
        }
    }

    public function NilaiPesanan($dtrm)
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["judul"] = "Halaman Nilai Pesanan";
        $data["nilaipesanan"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $dtrm])->row_array();
        $this->load->view("Halaman_Nilai_Pesanan", $data);
    }


    public function FormNilaiPesanan($nilaipesanan)
    {
        $this->form_validation->set_rules("penilaian_barang", "PENILAIAN BARANG", "required", [
            "required" => "Kolom Penilaian Barang Harus Diisi"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $data["judul"] = "Halaman Nilai Pesanan";
            $data["nilaipesanan"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $nilaipesanan])->row_array();
            $this->load->view("Halaman_Nilai_Pesanan", $data);
        } else {
            $data = [
                "penilaian_barang" => $this->input->post("penilaian_barang")
            ];

            $this->db->where("id_transaksi", $nilaipesanan);
            $this->db->update("tb_transaksi", $data);

            $this->session->set_flashdata("penilaian", "Penilaian Anda Berhasil Dikirimkan");
            $redirectURL = 'Halaman_Pembeli/FormNilaiPesanan/' . $nilaipesanan;
            redirect($redirectURL);
        }
    }


    public function BatalTransaksi($blmbyr)
    {
        $this->db->set("status_order", 4);
        $this->db->where("id_transaksi", $blmbyr);
        $this->db->update("tb_transaksi");

        $transaksi = $this->db->get_where("tb_transaksi", ["id_transaksi" => $blmbyr])->row_array();

        $no_order = $transaksi["no_order"];

        $rinci_transaksi = $this->db->get_where("tb_rinci_transaksi", ["no_order" => $no_order])->result_array();

        foreach ($rinci_transaksi as $rnc) {

            $id_barang = $rnc["id_barang"];

            $id_brg = $this->db->get_where("tb_barang", ["id_barang" => $id_barang])->row_array();

            $qty = $id_brg["stok"] + $rnc["qty"];

            $data = [
                "stok" => $qty,
            ];

            $this->db->where("id_barang", $id_barang);
            $this->db->update("tb_barang", $data);
        }

        $this->session->set_flashdata("batal", "Pembatalan Pesanan Berhasil");
        redirect("Halaman_Pembeli/PesananSaya");
    }


    public function MetodePembayaran($blmbyr)
    {

        $this->form_validation->set_rules("metode_pembayaran", "METODE PEMBAYARAN", "required", [
            "required" => "Kolom Metode Pembayaran Harus Diisi"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Metode Pembayaran";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $this->load->view("Halaman_Metode_Pembayaran", $data);
        } else {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $metode_pembayaran = $_POST['metode_pembayaran'];


                if ($metode_pembayaran === 'cod') {

                    $this->db->set("status_bayar", 1);
                    $this->db->set("metode_pembayaran", "cod");
                    $this->db->where("id_transaksi", $blmbyr);
                    $this->db->update("tb_transaksi");

                    $this->session->set_flashdata("metodepembayarann", "Pembayaran Berhasil");
                    redirect("Halaman_Pembeli/PesananSaya");
                } elseif ($metode_pembayaran === 'transfer_bank') {
                    $redirectURL = 'Halaman_Pembeli/Transfer_Bank/' . $blmbyr;
                    redirect($redirectURL);
                }
            }
        }
    }


    public function Transfer_Bank($blmbyr)
    {
        $data['judul'] = "Halaman Metode Pembayaran Transfer Bank";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["transferbank"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $blmbyr])->row_array();
        $data["mandiri"] = $this->db->get_where("rekening", ["nama_bank" => "MANDIRI"])->row_array();
        $data["bca"] = $this->db->get_where("rekening", ["nama_bank" => "BCA"])->row_array();
        $data["bni"] = $this->db->get_where("rekening", ["nama_bank" => "BNI"])->row_array();
        $this->load->view("Halaman_Transfer_Bank", $data);
    }


    public function Pembayaran_TransferBank_Mandiri($transferbank)
    {
        $this->form_validation->set_rules('atas_nama', 'ATAS NAMA', 'required', [
            'required' => 'Kolom Atas Nama Harus Diisi'
        ]);

        $this->form_validation->set_rules('nama_bank', 'NAMA BANK', 'required', [
            'required' => 'Kolom Nama Bank Harus Diisi'
        ]);

        $this->form_validation->set_rules('no_rek', 'NO REK', 'required|numeric', [
            'required' => 'Kolom No Rek Harus Diisi',
            'numeric' => 'Kolom No Rek Harus Diisi Menggunakan Angka'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Halaman Metode Pembayaran Transfer Bank";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $data["transferbank"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $transferbank])->row_array();
            $data["mandiri"] = $this->db->get_where("rekening", ["nama_bank" => "MANDIRI"])->row_array();
            $data["bca"] = $this->db->get_where("rekening", ["nama_bank" => "BCA"])->row_array();
            $data["bni"] = $this->db->get_where("rekening", ["nama_bank" => "BNI"])->row_array();
            $this->load->view("Halaman_Transfer_Bank", $data);
        } else {
            $config['upload_path'] = './assets/bukti_bayar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';

            $this->upload->initialize($config);

            $field_name = 'bukti_bayar';
            if (!$this->upload->do_upload($field_name)) {
                echo $this->upload->display_errors();
            } else {
                $upload_data = [
                    'upload' => $this->upload->data()
                ];
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/bukti_bayar/' . $upload_data['upload']['file_name'];
                $this->load->library('image_lib', $config);
            }

            $bukti_bayar = $upload_data['upload']['file_name'];

            $atas_nama = $this->input->post("atas_nama");
            $nama_bank = $this->input->post("nama_bank");
            $no_rek = $this->input->post("no_rek");

            $this->db->set("atas_nama", $atas_nama);
            $this->db->set("nama_bank", $nama_bank);
            $this->db->set("no_rek", $no_rek);
            $this->db->set("bukti_bayar", $bukti_bayar);
            $this->db->set("status_bayar", 1);
            $this->db->set("metode_pembayaran", "transfer_bank");
            $this->db->set("bank_pembayaran", "MANDIRI");
            $this->db->where("id_transaksi", $transferbank);
            $this->db->update("tb_transaksi");

            $this->session->set_flashdata("pembayaran", "Pembayaran Berhasil");
            redirect("Halaman_Pembeli/PesananSaya");
        }
    }

    public function Pembayaran_TransferBank_BCA($transferbank)
    {
        $this->form_validation->set_rules('atas_namaa', 'ATAS NAMA', 'required', [
            'required' => 'Kolom Atas Nama Harus Diisi'
        ]);

        $this->form_validation->set_rules('nama_bankk', 'NAMA BANK', 'required', [
            'required' => 'Kolom Nama Bank Harus Diisi'
        ]);

        $this->form_validation->set_rules('no_rekk', 'NO REK', 'required|numeric', [
            'required' => 'Kolom No Rek Harus Diisi',
            'numeric' => 'Kolom No Rek Harus Diisi Menggunakan Angka'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Halaman Metode Pembayaran Transfer Bank";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $data["transferbank"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $transferbank])->row_array();
            $data["mandiri"] = $this->db->get_where("rekening", ["nama_bank" => "MANDIRI"])->row_array();
            $data["bca"] = $this->db->get_where("rekening", ["nama_bank" => "BCA"])->row_array();
            $data["bni"] = $this->db->get_where("rekening", ["nama_bank" => "BNI"])->row_array();
            $this->load->view("Halaman_Transfer_Bank", $data);
        } else {
            $config['upload_path'] = './assets/bukti_bayar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';

            $this->upload->initialize($config);

            $field_name = 'bukti_bayar';
            if (!$this->upload->do_upload($field_name)) {
                echo $this->upload->display_errors();
            } else {
                $upload_data = [
                    'upload' => $this->upload->data()
                ];
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/bukti_bayar/' . $upload_data['upload']['file_name'];
                $this->load->library('image_lib', $config);
            }

            $bukti_bayar = $upload_data['upload']['file_name'];

            $atas_nama = $this->input->post("atas_namaa");
            $nama_bank = $this->input->post("nama_bankk");
            $no_rek = $this->input->post("no_rekk");

            $this->db->set("atas_nama", $atas_nama);
            $this->db->set("nama_bank", $nama_bank);
            $this->db->set("no_rek", $no_rek);
            $this->db->set("bukti_bayar", $bukti_bayar);
            $this->db->set("status_bayar", 1);
            $this->db->set("metode_pembayaran", "transfer_bank");
            $this->db->set("bank_pembayaran", "BCA");
            $this->db->where("id_transaksi", $transferbank);
            $this->db->update("tb_transaksi");

            $this->session->set_flashdata("pembayaran", "Pembayaran Berhasil");
            redirect("Halaman_Pembeli/PesananSaya");
        }
    }

    public function Pembayaran_TransferBank_BNI($transferbank)
    {
        $this->form_validation->set_rules('atas_namaaa', 'ATAS NAMA', 'required', [
            'required' => 'Kolom Atas Nama Harus Diisi'
        ]);

        $this->form_validation->set_rules('nama_bankkk', 'NAMA BANK', 'required', [
            'required' => 'Kolom Nama Bank Harus Diisi'
        ]);

        $this->form_validation->set_rules('no_rekkk', 'NO REK', 'required|numeric', [
            'required' => 'Kolom No Rek Harus Diisi',
            'numeric' => 'Kolom No Rek Harus Diisi Menggunakan Angka'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Halaman Metode Pembayaran Transfer Bank";
            $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            $data["transferbank"] = $this->db->get_where("tb_transaksi", ["id_transaksi" => $transferbank])->row_array();
            $data["mandiri"] = $this->db->get_where("rekening", ["nama_bank" => "MANDIRI"])->row_array();
            $data["bca"] = $this->db->get_where("rekening", ["nama_bank" => "BCA"])->row_array();
            $data["bni"] = $this->db->get_where("rekening", ["nama_bank" => "BNI"])->row_array();
            $this->load->view("Halaman_Transfer_Bank", $data);
        } else {
            $config['upload_path'] = './assets/bukti_bayar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';

            $this->upload->initialize($config);

            $field_name = 'bukti_bayar';
            if (!$this->upload->do_upload($field_name)) {
                echo $this->upload->display_errors();
            } else {
                $upload_data = [
                    'upload' => $this->upload->data()
                ];
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/bukti_bayar/' . $upload_data['upload']['file_name'];
                $this->load->library('image_lib', $config);
            }

            $bukti_bayar = $upload_data['upload']['file_name'];

            $atas_nama = $this->input->post("atas_namaaa");
            $nama_bank = $this->input->post("nama_bankkk");
            $no_rek = $this->input->post("no_rekkk");

            $this->db->set("atas_nama", $atas_nama);
            $this->db->set("nama_bank", $nama_bank);
            $this->db->set("no_rek", $no_rek);
            $this->db->set("bukti_bayar", $bukti_bayar);
            $this->db->set("status_bayar", 1);
            $this->db->set("metode_pembayaran", "transfer_bank");
            $this->db->set("bank_pembayaran", "BNI");
            $this->db->where("id_transaksi", $transferbank);
            $this->db->update("tb_transaksi");

            $this->session->set_flashdata("pembayaran", "Pembayaran Berhasil");
            redirect("Halaman_Pembeli/PesananSaya");
        }
    }
}
