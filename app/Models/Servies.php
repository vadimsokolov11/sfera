<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servies extends Model
{
    use HasFactory;
    //мягкое удаление, нигде в системе не появляются данные, но в базе сохраняются + еще строка в миграциях 
    use SoftDeletes;
    //явное объявление таблицы с которой работаем
    protected $table = 'servies';
    //разрешение на добавление данных в базу
    protected $guarded = [];
    //или можно так
    // protected $guarded = false;
}
