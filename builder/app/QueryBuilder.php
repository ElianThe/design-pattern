<?php

namespace App;

interface QueryBuilder
{
    public function select($query);
    public function from($table);
    public function where($condition);
    public function getQuery();
}