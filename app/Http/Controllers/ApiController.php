<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralResourceCollection;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use ApiResponses;

    // public function response($data, bool $asCollection = false)
    // {
    //     if ($asCollection) {
    //         return new GeneralResourceCollection($data);
    //     }

    //     return new GeneralResource($data);
    // }
}
