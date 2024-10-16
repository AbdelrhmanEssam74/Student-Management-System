<?php

namespace PROJECT\Database\Managers;

use PROJECT\Database\Grammars\MYSQLGrammar;
use PROJECT\Database\Managers\Contracts\DatabaseManager;

class MYSQLManager implements  DatabaseManager
{
    protected static $instance = null;

    public function connect(): \PDO
    {
        if (!self::$instance) {
            self::$instance = new \PDO(env('DB_DRIVER') . ":host=" . env("DB_HOST") . ";dbname=" . env("DB_Database"), env("DB_USERNAME"), env("DB_PASSWORD"));
        }
        return self::$instance;
    }

    public function query(string $query, $values = [])
    {
    }

    public function create($data)
    {
        $query = MYSQLGrammar::buildInsertQuery(array_keys($data));
        $stm = self::$instance->prepar($query);
        return $query;
    }

    public function read($columns = '*', $filter = null)
    {
    }

    public function update($column, $data)
    {
    }

    public function delete($columns)
    {
    }
}