<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\describe_type;

class Categories extends Model
{
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];
}
