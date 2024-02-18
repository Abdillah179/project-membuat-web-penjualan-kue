<?php
class Model_Login_Registrasi extends CI_Model
{

    public function RegistrasiPembeli()
    {

        $data = [
            "nama" => htmlspecialchars($this->input->post("nama", true)),
            "email" => htmlspecialchars($this->input->post("email", true)),
            "password" => htmlspecialchars(password_hash($this->input->post("password", true),  PASSWORD_DEFAULT)),
            "role_id" => 2,
            "is_active" => 0,
            "date_created" => time(),
            "image" => "default.jpg"

        ];

        // Token

        $token = base64_encode(random_bytes(32));
        $token_email = $this->input->post("email", true);

        $data_token = [
            'token' => $token,
            'email' => $token_email,
            'date_created' => time()
        ];

        $this->db->insert("user", $data);
        $this->db->insert("user_token", $data_token);

        $this->_sendEmail($token, 'verify');
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cahayabakeryy@gmail.com',
            'smtp_pass' => 'oomm akjb pibf layj',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->load->library("email", $config);

        $this->email->initialize($config);


        $this->email->from('cahayabakeryy@gmail.com', 'Cahaya Bakery');
        $this->email->to($this->input->post("email"));

        if ($type == "verify") {
            $this->email->subject('Verifikasi');
            $this->email->message('Link Aktivasi : <a href="' . base_url() . 'Login_Registrasi/Verify?email=' . $this->input->post("email") . '&token=' . urlencode($token) . '">Activate</>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

    public function LoginPembeli()
    {

        $email = $this->input->post("email", true);
        $password = $this->input->post("password", true);

        $user = $this->db->get_where("user", ["email" => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user["password"])) {
                if ($user["is_active"] == 1) {
                    $data = [
                        "id" => $user["id_pembeli"],
                        "nama" => $user["nama"],
                        "email" => $user["email"],
                        "role_id" => $user["role_id"]
                    ];
                    $this->session->set_userdata($data);

                    $toko = $this->db->get_where("toko", ["active" == 1])->row_array();

                    $data2 = [
                        "id_toko" => $toko["id_toko"],
                        "active" => $toko["active"],
                    ];

                    $this->session->set_userdata($data2);

                    if ($this->session->userdata("active") == 1) {
                        if ($this->session->userdata("role_id") == 2) {
                            $this->session->set_flashdata("Loginnnn", "BERHASIL");
                            redirect("Halaman_Pembeli/index");
                        } else {
                            redirect("Halaman_Eror/index");
                        }
                    } else {
                        redirect("Halaman_Tutup/index");
                    }
                } else {
                    $this->session->set_flashdata("Loginn", "Belum Teraktivasi");
                    redirect("Login_Registrasi/index");
                }
            } else {
                $this->session->set_flashdata("Loginnn", "SALAH");
                redirect("Login_Registrasi/index");
            }
        } else {
            $this->session->set_flashdata("Login", "Tidak Terdaftar");
            redirect("Login_Registrasi/index");
        }
    }

    public function RegistrasiAdmin()
    {
        $data = [
            "nama" => htmlspecialchars($this->input->post("nama", true)),
            "email" => htmlspecialchars($this->input->post("email", true)),
            "password2" => htmlspecialchars(password_hash($this->input->post("password2", true),  PASSWORD_DEFAULT)),
            "role_id" => 0,
            "is_active" => 0,
            "date_created" => time(),
            "image" => "default.jpg"

        ];

        // SIAPKAN TOKEN 

        $token = base64_encode(random_bytes(32));
        $email = $this->input->post("email");

        $user_token = [
            "token" => $token,
            "email" => $email,
            "date_created" => time()
        ];

        $this->db->insert("user_admin", $data);
        $this->db->insert("user_token", $user_token);

        $this->_sendEmailAdmin($token, "verify");
    }

    private function _sendEmailAdmin($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cahayabakeryy@gmail.com',
            'smtp_pass' => 'oomm akjb pibf layj',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->load->library("email", $config);

        $this->email->initialize($config);


        $this->email->from('cahayabakeryy@gmail.com', 'Cahaya Bakery');
        $this->email->to($this->input->post("email"));

        if ($type == "verify") {
            $this->email->subject('Verifikasi');
            $this->email->message('Link Aktivasi : <a href="' . base_url() . 'Login_Registrasi/VerifyAdmin?email=' . $this->input->post("email") . '&token=' . urlencode($token) . '">Activate</>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

    public function LoginAdmin()
    {

        $email = $this->input->post("email2", true);
        $password = $this->input->post("password2", true);

        $user = $this->db->get_where("user_admin", ["email" => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user["password2"])) {
                if ($user["is_active"] == 1) {
                    $data = [
                        "id" => $user["id_admin"],
                        "nama" => $user["nama"],
                        "email" => $user["email"],
                        "role_id" => $user["role_id"]
                    ];

                    $this->session->set_userdata($data);

                    if ($this->session->userdata("role_id") == 1) {
                        $this->session->set_flashdata("loginnnn", "BERHASIL");
                        redirect("Halaman_Admin/index");
                    } else {
                        if ($this->session->userdata("role_id") != 1) {
                            redirect("Halaman_Eror/index");
                        }
                    }
                } else {
                    $this->session->set_flashdata("loginn", "BELUM TERAKTIVASI");
                    redirect("Login_Registrasi/index2");
                }
            } else {
                $this->session->set_flashdata("loginnn", "SALAH");
                redirect("Login_Registrasi/index2");
            }
        } else {
            $this->session->set_flashdata("login", "TIDAK TERDAFTAR");
            redirect("Login_Registrasi/index2");
        }
    }


    public function ForgotPassword()
    {
        $email = $this->input->post("email");

        $user = $this->db->get_where("user", ["email" => $email])->row_array();

        if ($user) {
            if ($user["is_active"] == 1) {
                // Siapkan Token
                $token = base64_encode(random_bytes(32));
                $email = $this->input->post("email");

                $data_token = [
                    "email" => $email,
                    "token" => $token,
                    "date_created" => time()
                ];

                $this->db->insert("user_token", $data_token);

                $this->_sendEMailForgot($token, 'forgot');
            } else {
                $this->session->set_flashdata("forgottt", "Maaf Email Yang Anda Masukkan Belum Diaktivasi");
                redirect("Login_Registrasi/Forgot_Password");
            }
        } else {
            $this->session->set_flashdata("forgot", "Maaf Email Yang Anda Masukkan Tidak Terdaftar");
            redirect("Login_Registrasi/Forgot_Password");
        }
    }

    private function _sendEMailForgot($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cahayabakeryy@gmail.com',
            'smtp_pass' => 'oomm akjb pibf layj',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->load->library("email", $config);

        $this->email->initialize($config);

        $this->email->from('cahayabakeryy@gmail.com', 'Cahaya Bakery');
        $this->email->to($this->input->post("email"));

        if ($type == "forgot") {
            $this->email->subject('Link Forgot Password');
            $this->email->message('Link : <a href="' . base_url() . 'Login_Registrasi/Forgot?email=' . $this->input->post("email") . '&token=' . urlencode($token) . '">Reset Password</>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }


    public function ForgotPasswordAdmin()
    {
        $email = $this->input->post("email");

        $user = $this->db->get_where("user_admin", ["email" => $email])->row_array();

        if ($user) {
            if ($user["is_active"] == 1) {
                // SIAPKAN TOKEN

                $token = base64_encode(random_bytes(32));
                $email = $this->input->post("email");

                $data_token = [
                    "email" => $email,
                    "token" => $token,
                    "date_created" => time()
                ];

                $this->db->insert("user_token", $data_token);

                $this->_sendEmailForgotAdmin($token, "forgot");
            } else {
                $this->session->set_flashdata("forgotpasswordadminn", "Ubah Password Gagal, Email Yang Anda Masukkan Belum Di Aktivasi");
                redirect("Login_Registrasi/ForgotPasswordAdmin");
            }
        } else {
            $this->session->set_flashdata("forgotpasswordadmin", "Ubah Password Gagal, Email Yang Anda Masukkan Tidak Terdaftar");
            redirect("Login_Registrasi/ForgotPasswordAdmin");
        }
    }


    private function _sendEmailForgotAdmin($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'cahayabakeryy@gmail.com',
            'smtp_pass' => 'oomm akjb pibf layj',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->load->library("email", $config);

        $this->email->initialize($config);

        $this->email->from('cahayabakeryy@gmail.com', 'Cahaya Bakery');
        $this->email->to($this->input->post("email"));

        if ($type == "forgot") {
            $this->email->subject('Link Forgot Password');
            $this->email->message('Link : <a href="' . base_url() . 'Login_Registrasi/ForgotAdmin?email=' . $this->input->post("email") . '&token=' . urlencode($token) . '">Reset Password</>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }
}
