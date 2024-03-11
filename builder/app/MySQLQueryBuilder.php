<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilder {

    public string $query;

    public function __construct()
    {
        $this->query = '';
    }

    public function select($query)
    {
        $this->query .= 'SELECT ' . implode(', ',$query);
        return $this;
    }

    public function from($table)
    {
        $this->query .= ' FROM ' . $table;
        return $this;
    }

    public function where($condition)
    {
        $this->query .= ' WHERE ' . implode(', ',$condition);
        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }
}