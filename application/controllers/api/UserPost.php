<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class UserPost extends \Restserver\Libraries\REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('postmodel');
        $this->load->model('usermodel');
        $this->load->library('session');
    }

    public function new_post_post()
    {
        $this->load->model('Postmodel');
        $posted_user_id = $this->session->user_id;
        $user_name = $this->session->username;
        $book_name = $this->post('book_name');
        $book_author = $this->post('book_author');
        $book_description = $this->post('book_description');

        if ($this->postmodel->create_post($posted_user_id, $user_name, $book_name, $book_author, $book_description)) {
            $data_success = array('success' => 'Support ticket created created successfully');
            echo json_encode($data_success);
        } else {
            $this->set_response([
                'status' => false,
                'message' => 'Try a again support ticket not created'
            ], \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function created_post_get()
    {
        $posted_user_id = $this->session->user_id;
        $userBooks = $this->postmodel->get_post_by_uid($posted_user_id);
        $this->set_response([
            'status' => true,
            'message' => 'posts',
            'books' => $userBooks,
        ], \Restserver\Libraries\REST_Controller::HTTP_OK);
    }

    public function all_post_created_get()
    {
        $posts = $this->postmodel->get_all_posts();
        if ($posts) {
            $this->set_response([
                'status' => true,
                'message' => 'posts',
                'posts' => $posts,
            ], \Restserver\Libraries\REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], \Restserver\Libraries\REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function delete_post_get()
    { {
            $response = $this->postmodel->delete_post();
            if ($response == true) {
                echo "Error !";
            } else {
                echo "User Deactivated successfully !";
            }
        }
    }

    public function search_post()
    {
        $search_query = $this->post('search_query');
        $posts = $this->postmodel->search($search_query);
        $this->load->view('search');
        $this->set_response($posts, \Restserver\Libraries\REST_Controller::HTTP_OK);
    }
}
