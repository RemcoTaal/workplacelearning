<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\GenericActing.
 *
 * @property int $ga_id
 * @property int $ep_id
 */

class GenericActing extends Model
{
    protected $table = "GenericActing";
    protected $primaryKey = "ga_id";

//    https://laravel.com/docs/5.0/eloquent#timestamps
    public $timestamps = false;

    public function EducationProgram(){
        return $this->belongsTo('App\EducationProgram','ep_id','eptype_id');
    }

}