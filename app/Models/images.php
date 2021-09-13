<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'images';

    protected $primaryKey = 'id';

    protected $fillable = ['image', 'posts_id'];

    public function posts()
    {
        return $this->belongsTo('App\Models\posts', 'posts_id');
    }

}
