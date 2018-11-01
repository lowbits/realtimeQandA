<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['owner_id','body'];

    public function owner(){
        return $this->belongsTo('App\User', 'owner_id', 'id');
    }
}
