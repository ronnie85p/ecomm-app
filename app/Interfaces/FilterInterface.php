<?php

namespace App\Interfaces;

interface FilterInterface
{
    /**
     * @param $value
     * @return mixed
     */
    public function handle($value);
}