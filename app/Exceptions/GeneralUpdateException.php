<?php

namespace App\Exceptions;

class GeneralUpdateException extends GeneralException
{
    public $code = 422;

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return "Error while updating resource in the database";
    }
}