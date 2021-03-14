<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test_table extends Model
{
    public $table = "test_table";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = "int";
    public $timestamps    = false;
}
