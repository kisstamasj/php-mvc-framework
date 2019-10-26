<?php

namespace models;

class User extends Model
{
    public $id;

    public $username;

    public $email;

    public $firstName;

    public $lastName;

    public $mobile;

    public $password;

    /**
     * Load user by username and password
     *
     * @param string $username
     * @return void
     */
    public function loadByUserName($username)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE username=:username');
        $stmt->execute([":username" => $username]);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $stmt = null;
        $this->pdo = null;

        return isset($result[0]) ? $result[0] : null;
    }

    /**
     * Load user by email and password
     *
     * @param string $email
     * @return void
     */
    public function loadByEmail($email)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email=:email');
        $stmt->execute([":email" => $email]);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $stmt = null;
        $this->pdo = null;

        return isset($result[0]) ? $result[0] : null;
    }
}