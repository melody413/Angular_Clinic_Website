<?php

namespace App\Models;

use App\Models\BaseModel;

class QanswerTrans extends BaseModel
{
    public $timestamps = false;
    public $fillable = [
        'name',
        'excerpt',
        'description',
    ];
}
