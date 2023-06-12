<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class SupportTicket extends \Restserver\Libraries\REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('support');
        $this->load->model('usermodel');
        $this->load->library('session');
    }

    public function new_ticket_post()
    {
        $this->load->model('Support');
        $user_id = $this->session->user_id;
        $category = $this->post('category');
        $statement = $this->post('statement');

        if ($this->support->create_ticket($user_id, $category, $statement)) {
            $data_success = array('success' => 'Support ticket created created successfully');
            echo json_encode($data_success);
        } else {
            $this->set_response([
                'status' => false,
                'message' => 'Try a again support ticket not created'
            ], \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
