<?php
/*
 *    Date:            2018-06-07 09:25:48
 *    Description:    Database configurations
 *    Author:            @lyndonjohnv
 */
class Database
{
    private $host = "localhost";
    private $db_name = "test";
    private $username = "sqluser";
    private $password = "12345";
    public $conn;

    public function dbConnection()
    {
        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

}
