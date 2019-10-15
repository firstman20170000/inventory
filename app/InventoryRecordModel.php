<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class InventoryRecordModel extends Model
{
    protected $table = 'items_inv_logs';
    public $fillable = ['Item_id', 'TRANSACTION_TYPE', 'REFERENCE', 'CHANCE_QTY', 'Stock_Record', 'TYPE'];


}
