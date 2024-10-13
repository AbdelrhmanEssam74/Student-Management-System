<?php

namespace App\Models;

abstract class Model
{
    protected static $instance;

    public function create($data)
    {
        self::$instance = static::class;
        return app()->db->create($data);
    }

    public function all()
    {
        self::$instance = static::class;
        return app()->db->read();
    }

    public function where($filter, $columns = "*")
    {
        self::$instance = static::class;
        return app()->db->read($columns, $filter);
    }

    public function getModel()
    {
        return self::$instance;
    }

    public function getTableName()
    {
        return str::lower(str::plural(class_basename(self::$instance)));
    }
}