<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * App\content.
 *
 * @property int $cont_id
 * @property int $ga_id
 * @property string $timeslot
 * @property string $learninggoal
 * @property string $competence
 * @property string $evidence
 */
class content extends Model
{
    protected $table = "content";
    protected $primaryKey = "cont_id";

//    https://laravel.com/docs/5.0/eloquent#timestamps
    public $timestamps = false;


    public function generic_acting(){
        return $this->belongsTo('App\generic_acting','ga_id');
    }

}