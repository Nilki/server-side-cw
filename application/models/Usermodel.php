<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    public $table_name = "user";
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // public function get_all_users()
    // {

    //     $query = $this->db->get($this->table_name);
    //     return $query->result();
    // }

    public function create($username, $firstname, $lastname, $email, $password, $dob, $gender)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if ($this->db->insert('user', array(
            'user_name' => $username,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $email,
            'password' => $hashed_password,
            'birthdate' => $dob,
            'gender' => $gender
        ))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function isUsernameTaken($username)
    {
        $response = $this->db->get_where('user', array('user_name' => $username));
        if ($response->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function authenticate($username, $password)
    {

        $response = $this->db->get_where('user', array('user_name' => $username));
        if ($response->num_rows() != 1) {
            return FALSE;
        } else {
            $row = $response->row();
            if (password_verify($password, $row->password)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    public function is_logged_in()
    {
        if (isset($this->session->is_logged_in) && $this->session->is_logged_in == True) {
            return True;
        } else {
            return False;
        }
    }

    function get_user_id($username)
    {
        $response = $this->db->get_where('user', array('user_name' => $username));
        if ($response->num_rows() != 1) {
            return false;
        } else {
            $row = $response->row();
            return $row->user_id;
        }
    }

    function get_user_by_uname($username)
    {
        $response = $this->db->get_where('user', array('user_name' => $username));
        if ($response->num_rows() != 1) {
            return false;
        } else {
            $row = $response->row();
            return $row;
        }
    }

    function update_user_det($data, $username)
    {
        $this->db->where('user_name', $username);
        $this->db->update('user', $data);
        return true;
    }

    function deactivate($username)
    {
        $this->db->delete('user', array('user_name' => $username));
    }
}
