<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_profile extends CI_Controller
{

    public function index()
    {
        $this->load->view('edit_profile');
    }
}
