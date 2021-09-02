<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imagesOfVenue extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imagesOfVenues';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

     protected $guarded = [];

    public function venuesPhoto()
    {
        return $this->hasMany('App\Models\venuesPhoto');
    }

}
