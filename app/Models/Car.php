<?php

namespace App\Models;

use App\Filters\CarFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = CarFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        
    ];


}
