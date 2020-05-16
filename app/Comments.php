<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $fillable = [
      'post_id', 'name', 'email', 'website', 'comment', 'created_at', 'updated_at'
    ];

    public function posts(){
      return $this->belongsTo('App\Posts', 'post_id');
    }
}
