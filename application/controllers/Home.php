<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // $this->load->view('upload_form');
        // $this->load->view('home');

        $data['upload_form'] = $this->load->view('upload_form', '', TRUE);
        $data['upload_result'] = $this->load->view('upload_result', '', TRUE);
        $data['posts'] = $this->load->view('posts', '', TRUE);
        $this->load->view ('home', $data);
    }
}
