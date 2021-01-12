<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Content.
 *
 * @property int $cont_id
 * @property int $ga_id
 * @property string $timeslot
 * @property string $learninggoal
 * @property string $competence
 * @property string $evidence
 */
class Content extends Model
{
    protected $table = "Content";
    protected $primaryKey = "cont_id";

//    https://laravel.com/docs/5.0/eloquent#timestamps
    public $timestamps = false;


    public function GenericActing(){
        return $this->belongsTo('App\GenericActing','ga_id');
    }

}