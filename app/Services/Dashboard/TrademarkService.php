<?php

namespace App\Services\Dashboard;

use App\Services\BaseService;
use App\Repositories\Repository;
use App\Models\Dashboard\Trademark;
use App\Interfaces\ServiceInterface;

class TrademarkService extends BaseService
{
    public $model = Trademark::class;
}