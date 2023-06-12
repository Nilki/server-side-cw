<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class Post extends \Restserver\Libraries\REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('postmodel');
        $this->load->model('usermodel');
        $this->load->library('session');
    }

    public function index_get()
    {
        // $this->load->model('usersmodel');
        $users = $this->postmodel->get_all_users();
        // echo $users;die;
        // Users from a data store e.g. database
        if ($users) {
            // Set the response and exit
            $this->response($users, \Restserver\Libraries\REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        } else {
            // Set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], \Restserver\Libraries\REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }

        // $id = $this->get('id');

        // If the id parameter doesn't exist return all the users

        //     if ($id === NULL)
        //     {
        //         // Check if the users data store contains users (in case the database result returns NULL)

        //     }

        //     // Find and return a single record for a particular user.
        //     else {
        //         $id = (int) $id;

        //         // Validate the id.
        //         if ($id <= 0)
        //         {
        //             // Invalid id, set the response and exit.
        //             $this->response(NULL, \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        //         }

        //         // Get the user from the array, using the id as key for retrieval.
        //         // Usually a model is to be used for this.

        //         $user = NULL;

        //         if (!empty($users))
        //         {
        //             foreach ($users as $key => $value)
        //             {
        //                 if (isset($value['id']) && $value['id'] === $id)
        //                 {
        //                     $user = $value;
        //                 }
        //             }
        //         }

        //         if (!empty($user))
        //         {
        //             $this->set_response($user, \Restserver\Libraries\REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        //         }
        //         else
        //         {
        //             $this->set_response([
        //                 'status' => FALSE,
        //                 'message' => 'User could not be found'
        //             ], \Restserver\Libraries\REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        //         }
        //     }
    }

    public function new_post_post()
    {
        $this->load->model('Postmodel');
        $posted_user_id = $this->session->user_id;
        $book_name = $this->post('book_name');
        $book_author = $this->post('book_author');
        $book_description = $this->post('book_description');

        if ($this->post->create_post($posted_user_id, $book_name, $book_author, $book_description)) {
            $data_success = array('success' => 'Support ticket created created successfully');
            echo json_encode($data_success);
        } else {
            $this->set_response([
                'status' => false,
                'message' => 'Try a again support ticket not created'
            ], \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    // public function update_post()
    // {
    //     $user_name = $this->session->username;
    //     $user = $this->usermodel->get_user_by_uname($user_name);
    //     $value = array(
    //         // 'user_name' => $this->input->post('user_name'),
    //         'first_name' => $this->input->post('first_name'),
    //         'last_name' => $this->input->post('last_name'),
    //         'email' => $this->input->post('email'),
    //         'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //         'birthdate' => $this->input->post('birthdate'),
    //         'gender' => $this->input->post('gender')
    //     );
    //     $this->usermodel->update_user_det($value, $user->user_name);
    //     $this->set_response([
    //         'status' => true,
    //         'message' => 'Logged in user successfully retrieved',
    //         'user_name' => $user_name,
    //         'value' => $value

    //     ], \Restserver\Libraries\REST_Controller::HTTP_OK);
    // }
}
