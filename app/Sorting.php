<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sorting extends Model
{
    use SoftDeletes;

    protected $table = 'sortings';
    protected $fillable = ['display','mapping_id','rank'];

    protected $dates = ['deleted_at'];

    public function mapping()
    {
        return $this->belongsTo('App\Mapping');
    }
}
