<?php

namespace controllers;

use models\User;

class UserController extends Controller
{
    /**
     * This function call on ajax and login the user
     *
     * @return void
     */
    public function login()
    {
        $error = false;
        $errors = [];
        $username_email = trim($_POST["username_email"]);
        $password = trim($_POST["password"]);

        if(empty($username_email)){
            $error = true;
            $errors []= 'Username or email required!';
        }
        if(empty($password)){
            $error = true;
            $errors []= 'Password required!';
        }

        if(!$error)
        {
            try
            {
                $user = new User;
                if (!filter_var($username_email, FILTER_VALIDATE_EMAIL)) {
                    $authenticatable = $user->loadByUserName($username_email);
                } else {
                    $authenticatable = $user->loadByEmail($username_email);
                }

                if(!empty($authenticatable) && password_verify($password, $authenticatable['password'])){
                    $_SESSION['user'] = $authenticatable;
                } else {
                    $error = true;
                    $errors []= 'Login failed, please check your credentials!';
                }
            }
            catch(\PDOException $e)
            {
                $error = true;
                $errors []= $e->getMessage();
            }
        }

        echo json_encode(["error" => $error, "errors" => $errors]);
    }

    /**
     * This function logout the user
     *
     * @return void
     */
    public function logout()
    {
        unset($_SESSION['user']);
        echo json_encode(["success" => true]);
    }
}