<?php

namespace App\Interfaces;

interface SearchInterface
{
    /**
     * @param array $request
     * @return mixed
     */
    public function search(array $request);
}