<?php

namespace PROJECT\Database\Grammars;

use App\Models\Model;

class MYSQLGrammar
{
    public static function buildInsertQuery($keys): string
    {
        $values = "";
        for ($i = 1; $i <= count($keys); $i++) {
            $values .= "?";
            if ($i < count($keys)) {
                $values .= ", ";
            }
        }
        var_dump($values);
        $query = "INSERT INTO " . Model::getTableName() . " (`" . implode('` ,`', $keys) . "`)";
        return $query;
    }
}