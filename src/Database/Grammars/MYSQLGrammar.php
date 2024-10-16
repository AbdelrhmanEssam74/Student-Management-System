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

    public static function buildSelectQuery($columns, $filter): string
    {
        if (is_array($columns)) {
            $columns = "`" . implode("`, `", $columns) . "`";
        }
        $query = "SELECT {$columns} FROM " . Model::getTableName();
        if ($filter) {
            $query .= " WHERE {$filter[0]} {$filter[1]} ?";
        }
        return $query;
    }

    public static function buildDeleteQuery($where): string
    {
        $query = "DELETE FROM " . Model::getTableName() . " WHERE `{$where}` = ?";
        return $query;
    }

    public static function buildUpdateQuery($keys, $where): string
    {
        $query = "UPDATE " . Model::getTableName() . " SET ";
        foreach ($keys as $key) {
            $query .= " `{$key}` = ?, ";
        }
        $query = rtrim($query, ', ') . " WHERE `{$where}` = ?";
        return $query;
    }
}