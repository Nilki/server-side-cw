<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class Users extends \Restserver\Libraries\REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->library('session');
    }

    public function index_get()
    {
        // $this->load->model('usersmodel');
        $users = $this->usermodel->get_all_users();
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

    public function signup_post()
    {
        $this->load->model('Usermodel');

        $username = $this->post('user_name');
        $firstname = $this->post('first_name');
        $lastname = $this->post('last_name');
        $email = $this->post('email');
        $password = $this->post('password');
        $dob = $this->post('birthdate');
        $gender = $this->post('gender');

        $isUsernameTaken = $this->usermodel->isUsernameTaken($username);

        if (!$isUsernameTaken === TRUE) {
            if ($this->usermodel->create($username, $firstname, $lastname, $email, $password, $dob, $gender)) {
                $data_success = array('success' => 'User created successfully');
                echo json_encode($data_success);
            } else {
                $data_error = array('error' => 'Sign up error');
                echo json_encode($data_error);
            }
        } else {
            $this->set_response([
                'status' => false,
                'message' => 'Given username is already taken. Please provide a different username.'
            ], \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function login_post()
    {
        $username = $this->post('user_name');
        $password = $this->post('password');

        if ($this->usermodel->authenticate($username, $password)) {
            $this->session->username = $username;
            $user_id = $this->usermodel->get_user_id($username);
            $this->session->user_id = $user_id;
            $data_success = array('success' => 'User logged in successfully');
            echo json_encode($data_success);
        } else {
            $this->set_response([
                'status' => false,
                'message' => 'Please input correct authentication details'
            ], \Restserver\Libraries\REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function loggedinuser_get()
    {
        $user_id = $this->session->user_id;
        $user_name = $this->session->username;
        $user = $this->usermodel->get_user_by_uname($user_name);
        $this->set_response([
            'status' => true,
            'message' => 'Logged in user successfully retrieved',
            'user_id' => $user_id,
            'user_name' => $user->user_name,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'password' => $user->password,
            'birthdate' => $user->birthdate,
            'gender' => $user->gender,
        ], \Restserver\Libraries\REST_Controller::HTTP_OK);
    }

    public function update_post()
    {
        $user_name = $this->session->username;
        $user = $this->usermodel->get_user_by_uname($user_name);
        $value = array(
            // 'user_name' => $this->input->post('user_name'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'birthdate' => $this->input->post('birthdate'),
            'gender' => $this->input->post('gender')
        );
        $this->usermodel->update_user_det($value, $user->user_name);
        $this->set_response([
            'status' => true,
            'message' => 'Logged in user successfully retrieved',
            'user_name' => $user_name,
            'value' => $value

        ], \Restserver\Libraries\REST_Controller::HTTP_OK);
    }

    public function logout()
    {
        $this->session->is_logged_in = False;
        $this->output->set_output(json_encode(array('status' => true, 'msg' => 'log Out successfully')));
    }

    public function deactivate_get()
    { {
            $user_name = $this->session->username;
            $response = $this->usermodel->deactivate($user_name);
            if ($response == true) {
                echo "Error !";
            } else {
                echo "User Deactivated successfully !";
            }
        }
    }
}
