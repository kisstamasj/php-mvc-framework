<?php

namespace models;

use libraries\Config;

class Model
{
    /**
     * PDO object
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * DB table
     *
     * @var string
     */
    protected $table;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host='.Config::dbhost.';port='.Config::dbport.';dbname='.Config::dbname, Config::dbusername, Config::dbpassword,
        [
            \PDO::ATTR_PERSISTENT => true
        ]);

        // throw exceptions, when SQL error is caused
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        // prevent emulation of prepared statements
        $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    }
}