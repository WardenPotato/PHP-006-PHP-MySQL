<?php
/**
 * Created by PhpStorm.
 * User: Warden Potato
 * Date: 4/24/2018
 * Time: 11:23
 */
require_once "Settings.php";
class Users extends Settings
{
    public $pdo;
    public function __construct()
    {
        if(session_status() === PHP_SESSION_NONE)session_start();
        $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname;charset=$this->dbcharset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => true,
        ];
        $this->pdo = new PDO($dsn, $this->dbuser, $this->dbpass, $opt);
    }
    public function GetCursists(){
        $stmt = $this->pdo->query("SELECT * FROM cursist");
        $return = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $return;
    }
}