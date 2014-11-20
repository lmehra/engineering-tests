<?php 

class GuestController extends \BaseController
{
	protected $guest;
    protected $layout = 'layouts.master';

	public function __construct(GuestRepositoryInterface $guest)
	{
		$this->guest = $guest;
	}

	public function getIndex()
	{
        return \Redirect::to('guest/offer');
	}

    public function postOffer()
    {
        if(Input::has('name') && Input::has('phone_number'))
        {

            $validations = Validator::make(array('phone_number'=>Input::get('phone_number')), array('phone_number'=>'min:10|required'));

            if ($validations->fails())
            {
                return Redirect::to('/search')->withErrors($validations);
                exit;
            }

            $guest = Guest::like('name',Input::get('name'))
                            ->where('phone_number','=',(int)Input::get('phone_number'))
                            ->first();

            if(is_null($guest) || empty($guest))
            {
                $validations = Validator::make(array('phone_number'=>Input::get('phone_number')), array('phone_number'=>'unique:guests'));

                if ($validations->fails())
                {
                    return Redirect::to('/search')->withErrors($validations);
                    exit;
                }

                $guest = new Guest;
                $guest->name = Input::get('name');
                $guest->phone_number = Input::get('phone_number');

            }


            if(Input::has('offer_id'))
            {
                if(isset($guest->offer_id) && $guest->offer_id > 0)
                {
                    Session::flash('error', 'You have already selected a offer. You can not select another offer.');
                    Session::put('user', $guest->id);
                    return \Redirect::to('guest/offer');
                    exit;
                }

                $guest->offer_id = Input::get('offer_id');
            }

            $guest->save();

            Session::put('user', $guest->id);

            return \Redirect::to('guest/offer');

        }

    }

    public function getOffer()
    {
        if(Session::has('user'))
        {
            $guest = Guest::find(Session::get('user'));

            $days_avail = json_decode($guest->offer->days_avail);

            $days_avail = implode(', ',$days_avail);

            $start_time = $guest->offer->start_time=='00:00:00'?false:date("h:i a",strtotime($guest->offer->start_time));
            $end_time = $guest->offer->start_time=='00:00:00'?false:date("h:i a",strtotime($guest->offer->end_time));

            $expire_on = !is_null($guest->offer->expire_on)?date('d M Y',strtotime($guest->offer->expire_on)):false;

            $this->layout->content = \View::make('guest.offer')->with('guest',$guest)
                ->with('days_avail',$days_avail)
                ->with('start_time',$start_time)
                ->with('end_time',$end_time)
                ->with('expire_on',$expire_on);
        }
        else
            return \Redirect::to('/search');
    }

    public function postCheckOffer()
    {
        if(Input::has('name') && Input::has('phone_number'))
        {

            $validations = Validator::make(array('phone_number'=>Input::get('phone_number')), array('phone_number'=>'min:10'));

            if ($validations->fails())
            {
                return Redirect::to('/search')->withErrors($validations);
                exit;
            }

            $guest = Guest::like('name',Input::get('name'))
                ->where('phone_number','=',(int)Input::get('phone_number'))
                ->first();

            if(is_null($guest) || empty($guest))
            {
                Session::flash('error', 'Your details was not found. Please take any offer first.');
                return \Redirect::to('/search');
                exit;
            }

            if(is_null($guest->offer))
            {
                Session::flash('error', 'You havn\'t selected any offer. Please take any offer first.');
                return \Redirect::to('/search');
                exit;
            }

            Session::put('user', $guest->id);

            return \Redirect::to('guest/offer');
        }
        else
            return \Redirect::to('/search');

    }

}
