<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Postmodel extends CI_Model
{
    public $table_name = "post";
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_post($posted_user_id, $user_name, $book_name, $book_author, $book_description)
    {
        if ($this->db->insert('post', array(
            'posted_user_id' => $posted_user_id,
            'user_name' => $user_name,
            'book_name' => $book_name,
            'book_author' => $book_author,
            'book_description' => $book_description
        ))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_all_posts()
    {
        $this->db->select('post.*');
        $this->db->from('post');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_post_by_uid($id)
    {

        $this->db->select('post.*');
        $this->db->from('post');
        $this->db->where('posted_user_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function delete_post()
    {
        $this->db->field_exists('post_id', 'post');
        $this->db->delete('post', array('post_id' => $post_id));
    }

    public function search($search)
    {
        $this->db->select('post.*');
        $this->db->from('post');
        $this->db->like('book_name', $search);
        $this->db->or_like('book_author', $search);
        $this->db->or_like('user_name', $search);
        $query = $this->db->get();
        return $query->result();
    }
}
