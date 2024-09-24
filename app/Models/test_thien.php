<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_thien extends Model
{
    use HasFactory;
    protected $table = 'test_thiens';
    protected $fillable= [
        'ho_ten',
        'email',
        'sdt',
        'diachi',
        'code',
    ];
}
