<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class members extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    use SoftDeletes;
}
