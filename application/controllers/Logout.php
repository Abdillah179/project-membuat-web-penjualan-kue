<?php
class Logout extends CI_Controller
{

    public function logout()
    {
        // $this->session->unset_userdata("email");
        // $this->session->unset_userdata("role_id");
        $this->session->sess_destroy();
        redirect("Home/index");
    }
}
