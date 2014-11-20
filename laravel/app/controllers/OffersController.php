<?php 

class OffersController extends \BaseController
{
	protected $offers;

    protected $layout = 'layouts.master';

	public function __construct(OffersRepositoryInterface $offers)
	{
		$this->offers = $offers;
	}

	public function getIndex()
	{
    	$offers = $this->offers->all();
        $this->layout->content = \View::make('offers.result', compact('offers'));
	}


    public function getSearch()
    {
        $cities = Restaurant::cities();
        $this->layout->content = \View::make('offers.search')->with('cities',$cities);
    }

    public function postSearch()
    {
        $offers = Offers::select('*');

        if(Input::has('city'))
        {
            $rest_ids = Restaurant::getRestaurantByCity(Input::get('city'));

            $offers = $offers->whereIn('restaurant_id', $rest_ids);
        }

        if(Input::has('min_price'))
        {
            $offers = $offers->where('price','>=',Input::get('min_price'));
        }

        if(Input::has('max_price'))
        {
            $offers = $offers->where('price','<=',Input::get('max_price'));
        }

        if(Input::has('guest'))
        {
            $offers = $offers->where('min_guest','<=',Input::get('guest'))
                             ->where('max_guest','>=',Input::get('guest'));
        }

        if(Input::has('date'))
        {

            $offers = $offers->Where(function($query)
            {
                $query->whereNull('expire_on')
                      ->orWhere('expire_on', '>=', new \DateTime(Input::get('date')));
            });

            $offers = $offers->whereIn('id',function($query)
            {
                $query->select(DB::raw('id'))
                    ->from('offers')
                    ->whereRaw('days_avail LIKE "%'.date('D',strtotime(Input::get('date'))).'%"');
            });

        }

        if(Input::has('min_time'))
        {
            $offers = $offers->Where(function($query)
            {
                $query->where('start_time','=','00:00:00')
                    ->orWhere('start_time','<=',date('H:i:s', strtotime( Input::get('min_time'))));
            });
        }

        if(Input::has('max_time'))
        {
            $offers = $offers->Where(function($query)
            {
                $query->where('end_time','=','00:00:00')
                    ->orWhere('end_time','>=',date('H:i:s', strtotime( Input::get('max_time'))));
            });
        }

        $offers = $offers->get();

        $this->layout->content = \View::make('offers.result')->with('offers',$offers);

    }

}
