<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BundleFileModel extends Model
{
    //
    protected $table="bundle_files";
    public $fillable = ['bundle_id', 'filename'];
}
