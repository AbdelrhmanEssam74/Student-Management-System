<?php

namespace PROJECT\Database\Managers;

use PROJECT\Database\Grammars\MYSQLGrammar;
use PROJECT\Database\Managers\Contracts\DatabaseManager;

class MYSQLManager implements DatabaseManager
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
        $stm = self::$instance->prepare($query);
        for ($i = 1; $i <= count($values); $i++) {
            $stm->bindValue($i, $values[$i - 1]);
        }
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * @param $data ["Column Name" => "Value"]
     * @return mixed
     */
    public function create($data): mixed
    {
        $query = MYSQLGrammar::buildInsertQuery(array_keys($data));
        $stm = self::$instance->prepare($query);
        $values = array_values($data);
        for ($i = 1; $i <= count($values); $i++) {
            $stm->bindValue($i, $values[$i - 1]);

        }
        return $stm->execute();
    }

    public function read($columns = '*', $filter = null)
    {
    }

    public function update($id, $data)
    {
        $query = MYSQLGrammar::buildUpdateQuery(array_keys($data));
        $stm = self::$instance->prepare($query);
        $values = array_values($data);
        for ($i = 1; $i <= count($values); $i++) {
            $stm->bindValue($i, $values[$i - 1]);
            if ($i == count($values)) {
                $stm->bindValue($i + 1, $id);
            }
        }
        return $stm->execute();
    }

    public function delete($id)
    {
        $query = MYSQLGrammar::buildDeleteQuery();
        $stm = self::$instance->prepare($query);
        $stm->bindValue(":user_id", $id);
        return $stm->execute();
    }
}