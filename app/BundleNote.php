<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BundleNote extends Model
{
    //
    protected $table="bundle_note";
    public $fillable = ['bundle_id', 'user_id','comment'];
}
