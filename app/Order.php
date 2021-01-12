<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Order.
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
class Order extends Model
{

    protected $table = "Order";
    protected $primaryKey = "or_id";

//    https://laravel.com/docs/5.0/eloquent#timestamps
    public $timestamps = false;

    public function GenericActing(){
        return $this->belongsTo('App\GenericActing','ga_id');
    }

}