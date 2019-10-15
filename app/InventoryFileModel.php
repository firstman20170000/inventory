<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryFileModel extends Model
{
    protected $table = 'items_files';
    public $fillable = ['Item_id', 'filename'];
}
