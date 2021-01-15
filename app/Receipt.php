<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['user_id', 'address', 'card_number', 'total', 'status'];

    public function receiptitem() {
        return $this->hasMany(ReceiptItem::class);
    }
    public function user() {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
