<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    use SoftDeletes;
    // ใช้ตอน softDelete

}
