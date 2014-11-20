<?php


class Restaurant extends \Eloquent  {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'restaurant';

    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


    public function offers()
    {
        return $this->hasMany('Offers','restaurant_id','id');
    }

    public static function cities()
    {
        $cities  = Restaurant::distinct()->get(array('city'))->toArray();
        $return = array();

        foreach($cities as $city)
        {
            $return[$city['city']] = $city['city'];
        }

        return $return;
    }

    public static function getRestaurantByCity($city=false)
    {
        if($city)
        {
            $restaurants  = Restaurant::where('city','=',$city)->lists('id');

            return $restaurants;
        }
    }

}


?>