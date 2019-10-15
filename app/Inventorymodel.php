<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventorymodel extends Model
{
    protected $table = 'items';
	public $fillable = ['Item_Name', 'Item_description', 'Item_Weight', 'Item_Length', 'Item_Height', 'Item_Width', 'Image_Url', 'Purchase_Fee', 'EST_COST', 'MOQ', 'Item_ID', 'LEAD_TIME', 'Units_in_Stock'];
}

