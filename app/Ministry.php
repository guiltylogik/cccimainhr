<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    //

    protected $fillable = [];

    public function members(){
        return $this->belongsToMany(Member::class);
    }

    public function getMinistry($type){
        return Ministry::get()->where('type', '=', $type);
    }
}
