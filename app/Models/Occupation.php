<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table="occupation";

    protected $primaryKey = "id";

    protected $fillable = [
        "name"
    ];
}

