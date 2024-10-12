<?php

namespace PROJECT\Database\Grammars;

use PROJECT\Database\Managers\Contracts\DatabaseManager;

class MYSQLGrammar implements DatabaseManager
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
    }

    public function read($columns = '*', $filter = null)
    {
    }

    public function update($column, $data)
    {
    }

    public function delete($columns)
    {
        // TODO: Implement delete() method.
    }
}