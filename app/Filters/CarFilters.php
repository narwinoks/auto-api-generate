<?php

namespace App\Filters;

use Essa\APIToolKit\Filters\QueryFilters;

class CarFilters extends QueryFilters
{
    protected array $allowedFilters = [];

    protected array $columnSearch = [];
}
