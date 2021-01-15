<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
    protected $table = 'redeems';
    protected $fillable = ['code','discount'];
}
