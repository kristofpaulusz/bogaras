<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{

    protected $primaryKey = 'sp_id';


    protected $fillable = [
        'parent_class',
        'name',
        'level'
    ];
}
