<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Support extends CI_Model
{
    public $table_name = "support_ticket";
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_ticket($user_id, $category, $statement)
    {
        if ($this->db->insert('support_ticket', array(
            'user_id' => $user_id,
            'category' => $category,
            'statement' => $statement
        ))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
