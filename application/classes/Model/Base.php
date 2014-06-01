<?php defined('SYSPATH') or die('No direct script access.');

class Model_Base extends ORM
{
    public function fill(array $data)
    {
        foreach ($data as $field => $value) {
            $field = strtolower($field);
            $this->$field = $value;
        }

        return $this;
    }
} 