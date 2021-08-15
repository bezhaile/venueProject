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
    protected $table = 'images_of_venues';

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
    protected $fillable = ['Name_of_Venue', 'location', 'Number_of_sits', 'Uploade_Images', 'url'];


}
