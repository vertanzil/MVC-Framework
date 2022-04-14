<?php

namespace App\classes\Database;

use App\classes\Config;
use App\classes\Functions;
use mysqli;

require_once(__DIR__ . "/../Config.php");

/**
 * Class Database
 * @package App\classes
 */
class Database
{
    private $_connection;
    private static $_instance; //The single instance

    /**
     * @return Database
     */
    public static function getInstance()
    {
        if (!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Database constructor.
     */
    private function __construct()
    {
        $configuration = new Config();
        $this->_connection = new mysqli($configuration->getHost(), $configuration->getUsername(),
            $configuration->getPassword(), $configuration->getDatabase());
        if (mysqli_connect_error()) {
            header("Location: index.php?url=Error&Result=SQLError");
        }
    }

    /**
     * @param mysqli $connection
     * @return Database
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
        return $this;
    }

    private function __clone()
    {
        $this->_connection->close();
    }

    /**
     * @return mysqli
     */
    public function getConnection()
    {
        return $this->_connection;
    }

    /**
     * @return int
     */
    public function tableExist()
    {
        $housing = new SQLhousing();
        $database = Database::getInstance();
        if ($database->getConnection()) {
            $mysqli = $database->getConnection();
            $result = $mysqli->query($housing->tableExist());
            $resultrow = mysqli_fetch_row($result);
            return $resultrow[0] < 1 ? 0 : 1;
        }
        return null;
    }
    /**
     * @return string
     */
    public function installFldrcheck()
    {
        $functions = new Functions();
        $config = new Config();
        if (!$config->debugMode() == 1 && $functions->fileExists("./Installation/Installation.php")) {
                echo '<h1 style="background-color: #ff0000; padding-left: 0;">Error: </h1>';
                echo '<h4 style="background-color: #ff0000;">Installation directory is still present in the root folder, please remove this.</h4>';
        }
        return "";
    }
}