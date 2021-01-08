<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * App\order.
 *
 * @property int $or_id
 * @property int $ga_id
 * @property int $date
 * @property int $situation
 * @property int $timeslot
 * @property int $learninggoal
 * @property int $competence
 * @property int $resource_person
 * @property int $resource_material
 * @property int $reflection
 * @property int $detailed_reflection
 * @property int $evidence
 */
class order extends Model
{

    protected $table = "order";
    protected $primaryKey = "or_id";

//    https://laravel.com/docs/5.0/eloquent#timestamps
    public $timestamps = false;

    public function generic_acting(){
        return $this->belongsTo('App\generic_acting','ga_id');
    }

}