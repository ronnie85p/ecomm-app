<?php

namespace App\Services\Dashboard;

use App\Services\BaseService;
use App\Repositories\Repository;
use App\Models\Dashboard\Category;
use App\Interfaces\ServiceInterface;

class CategoryService extends BaseService
{
    public $model = Category::class;
}