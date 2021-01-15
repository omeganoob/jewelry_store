<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class ReceiptItem extends Model
{
    protected $table = 'receiptitems';
    protected $fillable = ['receipt_id', 'product_id', 'amount'];

    public function receipt() {
        return $this->belongsTo(Receipt::class);
    }
    public function product() {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
