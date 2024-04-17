<?php

namespace App\Services\Dashboard;

use App\Services\BaseService;
use App\Repositories\Repository;
use App\Models\Dashboard\Vendor;
use App\Interfaces\ServiceInterface;

class VendorService extends BaseService
{
    public $model = Vendor::class;

    public function getTrademarks()
    {
        return $this->model::find(1)->trademarks;
    }
}