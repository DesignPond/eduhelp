<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mapping extends Model
{
    use SoftDeletes;

    protected $table = 'mappings';
    protected $fillable = ['type_id','zotero','cls','rank','optional','used'];

    protected $dates = ['deleted_at'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function sorting()
    {
        return $this->hasMany('App\Sorting');
    }
}
