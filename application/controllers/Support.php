<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Support extends CI_Controller
{

    public function index()
    {
        $this->load->view('support');
        // $this->load->view('upload_form');
    }
}
