<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    /**
     * 可以被批量寫入的屬性
     * @var array
    */
    protected $fillable = [
        'type_id',
        'name',
        'bithday',
        'area',
        'fix',
        'description',
        'personality',
        'user_id',
    ];
}