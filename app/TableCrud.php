<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableCrud extends Model
{
    protected $table = 'table_crud';
    public $fillable = ['address', 'city', 'state', 'zip'];
    public $dates = ['created_at', 'updated_at'];
}
