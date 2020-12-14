<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurant';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
