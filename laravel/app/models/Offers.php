<?php 

class Offers extends \Eloquent
{
    protected $table = 'offers';
	protected $fillable = array('restaurant_id','description','price','min_guest','max_guest','days_avail','timing','active','expire_on');
    public $timestamps = false;


    public function restaurant()
    {
        return $this->belongsTo('Restaurant','restaurant_id');
    }
}
