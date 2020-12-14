<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exposants extends Model
{
    use HasFactory;

    protected $table = 'exposants';
    public $timestamps = true;

    use SoftDeletes;

    protected $guarded=[];
    protected $dates = ['deleted_at'];

}
