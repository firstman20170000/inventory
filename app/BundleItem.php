<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BundleItem extends Model
{
    //
    protected $table="bundle_items";
    public $fillable = ['bundle_id', 'item_id','qty_in_bundle'];
}
