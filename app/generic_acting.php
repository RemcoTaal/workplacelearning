<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\generic_acting.
 *
 * @property int $ga_id
 * @property int $ep_id
 */

class generic_acting extends Model
{
    protected $table = "generic_acting";
    protected $primaryKey = "ga_id";

//    https://laravel.com/docs/5.0/eloquent#timestamps
    public $timestamps = false;

    public function EducationProgram(){
        return $this->belongsTo('App\EducationProgram','ep_id','eptype_id');
    }

}