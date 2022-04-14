<?php


namespace App\classes\Database;

use App\classes\Config;


/**
 * Class sqlHousing
 * @package App\classes\Housing
 */
class SQLhousing implements Housingbase{
    /**
     * @param $variable1
     * @param $variable
     * @param $variable3
     * @return mixed
     */
    public function Test($variable1, $variable, $variable3)
    {
        //TODO PUT SQL HERE- EXAMPLE OF SQL BUILDER;
        //  $query = (new QueryBuilder())
        //->select('COALESCE (count(clue.id))')
        //->from('database')
        //->where("type=" . " 'something'");//
    }
    // ** Please leave the below two function as these are vital for checking tables exist in the framework. ** \\
    /**
     * @return string
     */
    public function checkTable()
    {
        $config = new Config();
        $db_name = $config->getDatabase();
        $table_name = $config->getTable();
        return "SELECT EXISTS(SELECT * FROM information_schema.tables WHERE table_schema = " . "'" . $db_name . "'" . " AND table_name = " . "'" . $table_name . "'" . ");";
    }
    /**
     * @return string
     */
    public function tableExist()
    {
        $config = new Config();
        return "SELECT COUNT(*) FROM information_schema.tables  WHERE table_schema = DATABASE() AND table_name = " . "'" . $config->getTable() . "'";
    }
}
?>