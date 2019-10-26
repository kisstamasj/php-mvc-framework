<?php

namespace libraries;

class Config
{
    /**
     * The root URL (necessary `/` at the and )
     */
    const root = 'http://localhost:8090/mvc/';

    /**
     * The page main title
     */
    const mainTitle = 'MVC Framework';

    /**
     * Database config
     */
    const dbhost = "localhost";
    const dbport = 3306;
    const dbname = "task";
    const dbusername = "root";
    const dbpassword = "";
}