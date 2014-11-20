<?php 

class Guest extends \Eloquent
{
    protected $table = 'guests';
	protected $fillable = array('id','name','phone_number','offer_id');
    public $timestamps = false;

    public function offer()
    {
        return $this->hasOne('Offers','id','offer_id');
    }

    public  function scopeLike($query, $field, $value){
        return $query->where($field, 'LIKE', "%$value%");
    }

}