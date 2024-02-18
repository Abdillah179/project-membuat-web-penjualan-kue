<?php
class Login_Registrasi extends CI_Controller
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

        $data["judul"] = "Halaman Login Pembeli";
        $this->load->view("Halaman_Login_Pembeli", $data);
    }

    public function RegistrasiPembeli()
    {
        $this->form_validation->set_rules("nama", "NAMA", "required", [
            "required" => "Kolom Nama Harus Diisi"
        ]);

        $this->form_validation->set_rules("email", "EMAIL", "required|valid_email|trim|is_unique[user.email]", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid",
            "is_unique" => "Email Yang Anda Masukkan Sudah Terdaftar"
        ]);

        $this->form_validation->set_rules("password", "PASSWORD", "required|trim|min_length[8]|matches[password2]", [
            "required" => "Kolom Password Harus Diisi",
            "min_length" => "Password Yang Anda Masukkan Kurang Dari 8 karakter",
            "matches" => "Password Tidak Sesuai Dengan Konfirmasi Password",

        ]);

        $this->form_validation->set_rules("password2", "KOFIRMASI PASSWORD", "required|trim|matches[password]", [
            "required" => "Kolom Konfirmasi Password Harus Diisi",
            "matches" => "Konfirmasi Password Tidak Sesuai Dengan Password"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Registrasi Pembeli";
            $this->load->view("Halaman_Registrasi_Pembeli", $data);
        } else {
            $this->Model_Login_Registrasi->RegistrasiPembeli();
            $this->session->set_flashdata("Registrasi", "Berhasil");
            redirect("Login_Registrasi/RegistrasiPembeli");
        }
    }

    public function LoginPembeli()
    {

        $this->form_validation->set_rules("email", "EMAIL", "required|valid_email", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid"
        ]);

        $this->form_validation->set_rules("password", "PASSWORD", "required|min_length[8]", [
            "required" => "Kolom Password Harus Diisi",
            "min_length" => "Password Yang Anda Masukkan Kurang Dari 8 Karakter"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Login Pembeli";
            $this->load->view("Halaman_Login_Pembeli", $data);
        } else {
            $this->Model_Login_Registrasi->LoginPembeli();
        }
    }

    public function index2()
    {

        $data["judul"] = "Halaman Login Admin";
        $this->load->view("Halaman_Login_Admin", $data);
    }

    public function RegistrasiAdmin()
    {
        $this->form_validation->set_rules("nama", "NAMA", "required", [
            "required" => "Kolom Nama Harus Diisi"
        ]);

        $this->form_validation->set_rules("email", "EMAIL", "required|valid_email|trim|is_unique[user_admin.email]", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid",
            "is_unique" => "Email Yang Anda Masukkan Sudah Terdaftar"
        ]);

        $this->form_validation->set_rules("password2", "PASSWORD", "required|trim|min_length[8]|matches[password3]", [
            "required" => "Kolom Password Harus Diisi",
            "min_length" => "Password Yang Anda Masukkan Kurang Dari 8 karakter",
            "matches" => "Password Tidak Sesuai Dengan Konfirmasi Password"
        ]);

        $this->form_validation->set_rules("password3", "KOFIRMASI PASSWORD", "required|trim|matches[password2]", [
            "required" => "Kolom Konfirmasi Password Harus Diisi",
            "matches" => "Konfirmasi Password Tidak Sesuai Dengan Password"
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data["judul"] = "Halaman Registrasi Admin";
            $this->load->view("Halaman_Registrasi_Admin", $data);
        } else {
            $this->Model_Login_Registrasi->RegistrasiAdmin();
            $this->session->set_flashdata("Regisadmin", "Registrasi Berhasil, Silahkan Cek Email Anda Untuk Verifikasi");
            redirect("Login_Registrasi/RegistrasiAdmin");
        }
    }

    public function LoginAdmin()
    {

        $this->form_validation->set_rules("email2", "EMAIL", "required|valid_email", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid"
        ]);

        $this->form_validation->set_rules("password2", "PASSWORD", "required|min_length[8]", [
            "required" => "Kolom Password Harus Diisi",
            "min_length" => "Password Yang Anda Masukkan Kurang Dari 8 karakter"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Login Admin";
            $this->load->view("Halaman_Login_Admin", $data);
        } else {
            $this->Model_Login_Registrasi->LoginAdmin();
        }
    }


    public function Verify()
    {
        $email = $this->input->get("email");
        $token = $this->input->get("token");

        $user = $this->db->get_where("user", ["email" => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where("user_token", ["token" => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token["date_created"] < 60 * 60) {

                    $data = [
                        "is_active" => 1
                    ];

                    $this->db->where("email", $email);
                    $this->db->update("user", $data);

                    $this->db->delete("user_token", ["email" => $email]);

                    $this->session->set_flashdata("aktivasiiii", "Aktivasi Berhasil");
                    redirect("Login_Registrasi/RegistrasiPembeli");
                } else {
                    $this->db->delete("user", ["email" => $email]);
                    $this->db->delete("user_token", ["email" => $email]);

                    $this->session->set_flashdata("aktivasiii", "Token Expired");
                    redirect("Login_Registrasi/RegistrasiPembeli");
                }
            } else {
                $this->session->set_flashdata("aktivasii", "Token Tidak Terdaftar");
                redirect("Login_Registrasi/RegistrasiPembeli");
            }
        } else {
            $this->session->set_flashdata("aktivasi", "Email Tidak Terdaftar");
            redirect("Login_Registrasi/RegistrasiPembeli");
        }
    }

    public function Forgot_Password()
    {
        $data["judul"] = "Halaman Forgot Password";
        $this->load->view("Halaman_Forgot_Password", $data);
    }

    public function FormForgotPassword()
    {
        $this->form_validation->set_rules("email", "EMAIL", "required|valid_email|trim", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid",
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Forgot Password";
            $this->load->view("Halaman_Forgot_Password", $data);
        } else {
            $this->Model_Login_Registrasi->ForgotPassword();
            $this->session->set_flashdata("forgott", "Silahkan Cek Email Untuk Reset Password");
            redirect("Login_Registrasi/Forgot_Password");
        }
    }


    public function Forgot()
    {
        $email = $this->input->get("email");
        $token = $this->input->get("token");

        $user = $this->db->get_where("user", ["email" => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where("user_token", ["token" => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata("forgot_password", $email);

                $this->ResetPassword();
            } else {
                $this->session->set_flashdata("forgotttt", "TOKEN TIDAK TERDAFTAR");
                redirect("Login_Registrasi/Forgot_Password");
            }
        } else {
            $this->session->set_flashdata("forgottt", "EMAIL TIDAK TERDAFTAR");
            redirect("Login_Registrasi/Forgot_Password");
        }
    }

    public function ResetPassword()
    {
        if (!$this->session->userdata("forgot_password")) {
            redirect("Login_Registrasi/Forgot_Password");
        } else {

            $this->form_validation->set_rules("password", "PASSWORD", "required|trim|min_length[8]|matches[password2]", [
                "required" => "Kolom Password Harus Diisi",
                "min_length" => "Password Yang Anda Masukkan Kurang Dari 8 karakter",
                "matches" => "Password Tidak Sesuai Dengan Konfirmasi Password"
            ]);

            $this->form_validation->set_rules("password2", "KOFIRMASI PASSWORD", "required|trim|matches[password]", [
                "required" => "Kolom Konfirmasi Password Harus Diisi",
                "matches" => "Konfirmasi Password Tidak Sesuai Dengan Password"
            ]);

            if ($this->form_validation->run() == FALSE) {
                $data["judul"] = "Halaman Change Password";
                $this->load->view("Halaman_Forgot_Password2", $data);
            } else {

                $passwordd = $this->input->post("password");

                $password = password_hash($passwordd, PASSWORD_DEFAULT);
                $email = $this->session->userdata("forgot_password");

                $this->db->set("password", $password);
                $this->db->where("email", $email);
                $this->db->update("user");

                $this->session->unset_userdata("forgot_password");

                $this->db->delete("user_token", ["email" => $email]);

                $this->session->set_flashdata("forgottttt", "Reset Password Berhasil Silahkan Login");
                redirect("Login_Registrasi/LoginPembeli");
            }
        }
    }

    public function VerifyAdmin()
    {
        $email = $this->input->get("email");
        $token = $this->input->get("token");

        $user = $this->db->get_where("user_admin", ["email" => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where("user_token", ["token" => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token["date_created"] < 60 * 60 * 24) {

                    $this->db->set("is_active", 1);
                    $this->db->where("email", $email);
                    $this->db->update("user_admin");

                    $this->db->delete("user_token", ["email" => $email]);

                    $this->session->set_flashdata("verifyadminnnn", "Verifikasi Berhasil Silahkan Login");
                    redirect("Login_Registrasi/RegistrasiAdmin");
                } else {

                    $this->db->delete("user", ["email" => $email]);
                    $this->db->delete("user_token", ["email" => $email]);

                    $this->session->set_flashdata("verifyadminnn", "VERIFIKASI GAGAL, TOKEN EXPIRED TERDAFTAR");
                    redirect("Login_Registrasi/RegistrasiAdmin");
                }
            } else {
                $this->session->set_flashdata("verifyadminn", "VERIFIKASI GAGAL, TOKEN TIDAK TERDAFTAR");
                redirect("Login_Registrasi/RegistrasiAdmin");
            }
        } else {
            $this->session->set_flashdata("verifyadmin", "VERIFIKASI GAGAL, EMAIL TIDAK TERDAFTAR");
            redirect("Login_Registrasi/RegistrasiAdmin");
        }
    }


    public function ForgotPasswordAdmin()
    {
        $data["judul"] = "Halaman Forgot Password Admin";
        $this->load->view("Halaman_Forgot_Password_Admin", $data);
    }

    public function FormForgotPasswordAdmin()
    {
        $this->form_validation->set_rules("email", "EMAIL", "required|valid_email|trim", [
            "required" => "Kolom Email Harus Diisi",
            "valid_email" => "Email Yang Anda Masukkan Tidak Valid"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data["judul"] = "Halaman Forgot Password Admin";
            $this->load->view("Halaman_Forgot_Password_Admin", $data);
        } else {
            $this->Model_Login_Registrasi->ForgotPasswordAdmin();
            $this->session->set_flashdata("forgotadmin", "Silahkan Cek Email Anda Untuk Mengganti Password");
            redirect("Login_Registrasi/ForgotPasswordAdmin");
        }
    }


    public function ForgotAdmin()
    {
        $email = $this->input->get("email");
        $token = $this->input->get("token");

        $user = $this->db->get_where("user_admin", ["email" => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where("user_token", ["token" => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata("forgot_password_admin", $email);

                $this->ChangePasswordAdmin();
            } else {
                $this->session->set_flashdata("forgotadminnn", "Ubah Password Gagal, Token Tidak Terdaftar");
                redirect("Login_Registrasi/ForgotPasswordAdmin");
            }
        } else {
            $this->session->set_flashdata("forgotadminn", "Ubah Password Gagal, Email Yang Anda Masukkan Tidak Terdaftar");
            redirect("Login_Registrasi/ForgotPasswordAdmin");
        }
    }

    public function ChangePasswordAdmin()
    {
        if (!$this->session->userdata("forgot_password_admin")) {
            redirect("Login_Registrasi/LoginAdmin");
        } else {

            $this->form_validation->set_rules("password2", "PASSWORD", "required|trim|min_length[8]|matches[password3]", [
                "required" => "Kolom Password Harus Diisi",
                "min_length" => "Password Yang Anda Masukkan Kurang Dari 8 karakter",
                "matches" => "Password Tidak Sesuai Dengan Konfirmasi Password"
            ]);

            $this->form_validation->set_rules("password3", "KOFIRMASI PASSWORD", "required|trim|matches[password2]", [
                "required" => "Kolom Konfirmasi Password Harus Diisi",
                "matches" => "Konfirmasi Password Tidak Sesuai Dengan Password"
            ]);

            if ($this->form_validation->run() == FALSE) {
                $data["judul"] = "Halaman Forgot Password Admin";
                $this->load->view("Halaman_Forgot_Password_Admin2", $data);
            } else {

                $passwordd = $this->input->post("password2");

                $password = password_hash($passwordd, PASSWORD_DEFAULT);

                $email = $this->session->userdata("forgot_password_admin");

                $this->db->set("password2", $password);
                $this->db->where("email", $email);
                $this->db->update("user_admin");

                $this->db->delete("user_token", ["email" => $email]);
                $this->session->unset_userdata("forgot_password_admin");

                $this->session->set_flashdata("sukses", "Ubah Password Email Berhasil, Silahkan Login");
                redirect("Login_Registrasi/LoginAdmin");
            }
        }
    }
}
