<?php
namespace App\classes\Database;
/**
 * Interface housingBase
 * @package App\classes\Housing
 */
interface Housingbase
{

    /**
     * @param $variable1
     * @param $variable
     * @param $variable3
     * @return mixed
     */
    public function Test($variable1, $variable , $variable3);
    public function CheckTable();
    public function tableExist();
}

?>