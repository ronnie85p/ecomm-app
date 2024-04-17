<?php

namespace App\Exceptions;

class GeneralSearchException extends GeneralException
{
    public $code = 422;

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return "Error while creating resource in the database";
    }
}