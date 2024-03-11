<?php

namespace App;

class litteralBuilder implements QueryBuilder
{

    public string $query;

    public function __construct()
    {
        $this->query = '';
    }
    public function select($query)
    {
        $this->query .= 'Je selection les champs ' . implode(', ',$query);
        return $this;
    }

    public function from($table)
    {
        $this->query .= ' de la table ' . $table;
        return $this;
    }

    public function where($condition)
    {
        $this->query .= ' où ' . implode(', ',$condition);
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }
}