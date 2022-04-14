<?php
namespace App\classes\builder;
use App\classes\builder\functions\Select;
use App\classes\builder\functions\Insert;
use App\classes\builder\functions\Update;
use App\classes\builder\functions\Delete;
class QueryBuilder
{
    public static function select(string ...$select): Select
    {
        return new Select($select);
    }

    public static function insert(string $into): Insert
    {
        return new Insert($into);
    }
    public static function update(string $table): Update
    {
        return new Update($table);
    }
    public static function delete(string $table): Delete
    {
        return new Delete($table);
    }
}
