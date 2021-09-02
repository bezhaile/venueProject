<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venuesPhoto extends Model
{
    protected $table = 'venuesPhoto';

    protected $primaryKey = 'id';

    protected $fillable = ['Uploade_Images', 'imagesOfVenues_id'];

    public function imagesOfVenues()
    {
        return $this->belongsTo('App\Models\imagesOfVenue', 'id', 'imagesOfVenues_id');
    }

}
